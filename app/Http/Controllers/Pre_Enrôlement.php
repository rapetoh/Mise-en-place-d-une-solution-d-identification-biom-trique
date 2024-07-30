<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DonneesBiometriques;
use App\Models\DonneesDemographiques;
use App\Models\Individu;
use App\Models\SessionEnrolement;
use App\Models\SessionPreEnrolement;
use Barryvdh\DomPDF\Facade\Pdf;

class Pre_Enrôlement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('PreEnr');
    }



    public function printPDF_Pre_enrolement($id)
    {

        $pdf = Pdf::loadView('PreEnrReceipt', $id);

        return $pdf->download('Référence d\'enrôlement.pdf');
    }

    public function receipt($receipt_id)
    {
        $receipt = $receipt_id;
        return view('PreEnr', compact('receipt'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|in:Masculin,Féminin',
            'nomJeuneFille' => 'nullable|string|max:255',
            'dateNaissance' => 'required|date|before:1 years ago',
            'paysVilleNaissance' => 'required|string|max:255',
            'paysVilleResidence' => 'required|string|max:255',
            'quartierResidence' => 'required|string|max:255',
            'statutMatrimonial' => 'required|in:Célibataire,Marié(e),Divorcé(e),Veuf(ve)',
            'nomPrenomsConjoint' => 'nullable|string|max:255',
            'tel1' => 'nullable|string|min:8|max:15|unique:donnees_demographiques,tel1|unique:individus,telephone',
            'tel2' => 'nullable|string|min:8|max:15',
            'mail' => 'nullable|email|max:255|unique:donnees_demographiques,mail',
            'numPersonnePrevenir1' => 'required_without_all:mail,tel1|string|max:255',
            'nomPersonnePrevenir1' => 'required_without_all:mail,tel1|string|max:255',
            'numPersonnePrevenir2' => 'required_without_all:mail,tel1|string|max:255',
            'nomPersonnePrevenir2' => 'required_without_all:mail,tel1|string|max:255',
            'profession' => 'required|string|max:255',
            'secteurEmploi' => 'required|string|in:Primaire,Secondaire,Tertiaire,Quaternaire,Autre',
            'autreSecteur' => 'nullable|string|max:255|required_if:secteurEmploi,Autre',
            'groupeSanguin' => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
        ]);

        $NIU = Uuid::uuid4();
        $NIU_int = hexdec(substr($NIU, 0, 16));


        $ref_Enr = Uuid::uuid4()->toString();
        $ref_Enr_short = substr($ref_Enr, 0, 25);

        $data = $request->only([
            'nom', 'prenom', 'nomJeuneFille', 'sexe', 'dateNaissance', 'paysVilleNaissance',
            'paysVilleResidence', 'quartierResidence', 'statutMatrimonial', 'nomPrenomsConjoint',
            'tel1', 'tel2', 'mail', 'numPersonnePrevenir1', 'nomPersonnePrevenir1', 'numPersonnePrevenir2', 'nomPersonnePrevenir2',
            'profession', 'secteurEmploi', 'autreSecteur', 'groupeSanguin'
        ]);

        

        try {
            DB::beginTransaction();
            
            Individu::create(
                [
                    'NIU' => $NIU_int,
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'telephone' => $data['tel1'],
                ]
            );

            DonneesDemographiques::create(
                [
                    'NIU' => $NIU_int,
                    'sexe' => $data['sexe'] == 'Masculin' ? 'M' :  'F',
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'tel1' => $data['tel1'],
                    'tel2' => $data['tel2'],
                    'mail' => $data['mail'],
                    'numero_personne_a_prevenir1' => $data['numPersonnePrevenir1'],
                    'numero_personne_a_prevenir2' => $data['numPersonnePrevenir2'],
                    'nom_personne_a_prevenir1' => $data['nomPersonnePrevenir1'],
                    'nom_personne_a_prevenir2' => $data['nomPersonnePrevenir2'],
                    'DOB' => $data['dateNaissance'],
                    'nom_prenom_conjoint' => $data['nomPrenomsConjoint'],
                    'pays_ville_naissance' => $data['paysVilleNaissance'],
                    'pays_ville_residence' => $data['paysVilleResidence'],
                    'quartier_residence' => $data['quartierResidence'],
                    'statut_matrimonial' => $data['statutMatrimonial'],
                    'profession' => $data['profession'],
                    'secteur_emploi' => $data['secteurEmploi'] === 'Autre' ? $data['autreSecteur'] : $data['secteurEmploi'],
                    //'autre_secteur' => $data['autreSecteur'],
                    'groupe_sanguin' => $data['groupeSanguin'],
                    'pieces_justificatives' => 'Aucune',
                    'ref_enrolement' => $ref_Enr_short,
                    'idAgent' => 0,
                    'nom_de_jeune_fille' => $data['nomJeuneFille'],
                ]
            );

            DonneesBiometriques::create(
                [
                    'NIU' => $NIU_int,
                    'ref_enrolement' => $ref_Enr_short,
                    'idAgent' => 0,
                ]
            );

            $DB = DonneesBiometriques::where('ref_enrolement', $ref_Enr_short)->first();

            $DD = DonneesDemographiques::where('ref_enrolement', $ref_Enr_short)->first();

            Log::info('DD: ' . $DD->idDDemo);
            Log::info('DB: ' . $DB->idDBio);

            SessionEnrolement::create(
                [
                    'NIU' => $NIU_int,
                    'ref_enrolement' => $ref_Enr_short,
                    'est_validee' => 0,
                    'idAgent' => 0,
                    'idDDemo' => $DD->idDDemo,
                    'idDBio' => $DB->idDBio,
                ]
            );

            SessionPreEnrolement::create(
                [
                    'nom_individu' => $data['nom'],
                    'prenom_individu' => $data['prenom'],
                    'mail_individu' => $data['mail'],
                    'telephone_individu' => $data['tel1'] . ' - ' . $data['tel2'],
                    'NIU' => $NIU_int,
                    'ref_enrolement' => $ref_Enr_short,
                    'idDDemo' => $DD->idDDemo,
                ]
            );
            $this->printPDF_Pre_enrolement($ref_Enr_short);
            DB::commit();
            notify()->success('Données démographiques enrégistrées avec succès!', 'Succès');
            return redirect()->route('PreEnrReceipt', ['receipt_id' => $ref_Enr_short]);
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            notify()->error('L\'enregistrement des données démographiques a échoué. ' . $e->getMessage() . '.', 'Erreur');
            return redirect()->back()->withErrors($e->getMessage());
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
