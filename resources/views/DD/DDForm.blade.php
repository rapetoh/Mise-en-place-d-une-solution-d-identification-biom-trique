<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/remixicon-CHNy0vJf.css" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/remixicon-CHNy0vJf.css" /><!-- Core CSS -->
<link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/core-DYhY3VUC.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/theme-default-D81zB6qC.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/demo-BPAVJiNP.css" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/core-DYhY3VUC.css" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/theme-default-D81zB6qC.css" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/demo-BPAVJiNP.css" />
<!-- Vendor Styles -->
<link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/perfect-scrollbar-urn4H3N7.css" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/build/assets/perfect-scrollbar-urn4H3N7.css" />
<!-- Page Styles -->    <link rel="stylesheet" href="{{ asset('css/AgentLogin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/solid.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <title>Document</title>
    @notifyCss
    @livewireStyles
</head>

<body>

    <div id="loader">
        <div class="spinner"></div>
    </div>
    @include('notify::components.notify')

    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

        <!--  Brand demo (display only for navbar-full and hide on below xl) -->

        <!-- ! Not required for layout-without-menu -->
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <a href="{{ route('home') }}">
                    <div class="nav-item d-flex align-items-center heading">
                        <img src="{{ asset('img/empreinte-digitale.png') }}" class="w-px-20 h-auto rounded-circle">
                        <h4 style="color: red; font-weight: bold;">&nbsp;&nbsp;&nbspID</h4>
                        <h4 style="color: green; font-weight: bold;">Togo</h4>
                    </div>
                </a>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">


                <li class="nav-item lh-1 me-3 online-message" id="online-message">
                    <div style=" border-radius: 13px; padding: 7px;">
                        <p style="font-weight: bold; ">Service en ligne</p>
                    </div>

                </li>

                <li class="nav-item lh-1 me-3 offline-message" id="offline-message">
                    <div style="border-radius: 13px; padding: 7px;">
                        <p style="font-weight: bold; ">Service hors Ligne</p>
                    </div>

                </li>

                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                    <div style=" background-color: rgb(198, 198, 198); border-radius: 13px; padding: 7px;">
                        <p style="font-weight: bold; ">ID: {{ auth()->user()->idAgent }}</p>
                    </div>

                </li>

                <li class="nav-item lh-1 me-3">
                    <div style=" background-color: rgb(198, 198, 198); border-radius: 13px; padding: 7px;">
                        <p style="font-weight: bold; ">Mail: {{ auth()->user()->mail }}</p>
                    </div>

                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/7.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                        <li>
                            <a class="dropdown-item pb-2 mb-1" href="javascript:void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2 pe-1">
                                        <div class="avatar avatar-online">
                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/7.png" alt class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</h6>
                                        <small class="text-muted">Agent d'enrôlement</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                <span class="align-middle">Acceuil</span>
                            </a>
                        </li>
                        <!-- @if (auth()->user()->isAdmin == true)
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                <span class="align-middle">Ajouter un agent</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('agents.index') }}">
                                <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                <span class="align-middle">Liste des agents</span>
                            </a>
                        </li>
                        @endif -->

                        <!-- <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class='mdi mdi-cog-outline me-1 mdi-20px'></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                                    <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li> -->
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <form id="post-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">
                                    <i class='mdi mdi-power me-1 mdi-20px'></i>
                                    <span class="align-middle">Se déconnecter</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>


    <div class="row m-5">
        <div class="col-md-12">
            <div class="card mb-4">
                <h4 class="card-header" style="color: red; font-weight: 600; font-size: 15px; margin-left: 39px;"><span style="color: green; font-weight: 600; font-size: 15px; margin-left: 39px;">STEP</span> <span class="flex-shrink-0 badge badge-center rounded-pill bg-success w-px-20 h-px-20">1</span> sur <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">3</span> - Données Démographiques de l'individu &nbsp;<i style="color: green;" class="fa-solid fa-address-card"></i></h4>
                <!-- Account -->
                <div class="card-body pt-2">
                    <form id="formAccountSettings" enctype="multipart/form-data" style="max-width: 80%;" class="p-4" method="POST" action="{{route('ddForm.store')}}">
                        @csrf
                        <div class="row mt-2 gy-4">
                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" name="nom" placeholder="Nom" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="nom">Nom *</label>
                                    @error('nom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom" name="prenom" placeholder="Prénom" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="prenom">Prénom *</label>
                                    @error('prenom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <select class="form-control @error('sexe') is-invalid @enderror" id="sexe" name="sexe">
                                        <option value="">Sélectionner le sexe</option>
                                        <option value="Masculin" {{ old('sexe') == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                        <option value="Féminin" {{ old('sexe') == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                                    </select>
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="sexe">Sexe *</label>
                                    @error('sexe')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Champ Nom de jeune fille, caché initialement -->
                            <div class="col-md-4" id="nomJeuneFilleDiv" style="display: none;">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('nomJeuneFille') is-invalid @enderror" value="{{ old('nomJeuneFille') }}" id="nomJeuneFille" name="nomJeuneFille" placeholder="Nom de jeune fille" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="nomJeuneFille">Nom de jeune fille</label>
                                    @error('nomJeuneFille')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="date" class="form-control @error('dateNaissance') is-invalid @enderror" value="{{ old('dateNaissance') }}" id="dateNaissance" name="dateNaissance" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="dateNaissance">Date de naissance *</label>
                                    @error('dateNaissance')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('paysVilleNaissance') is-invalid @enderror" value="{{ old('paysVilleNaissance') }}" id="paysVilleNaissance" name="paysVilleNaissance" placeholder="Pays/Ville de naissance" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="paysVilleNaissance">Pays-Ville de naissance *</label>
                                    @error('paysVilleNaissance')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('paysVilleResidence') is-invalid @enderror" value="{{ old('paysVilleResidence') }}" id="paysVilleResidence" name="paysVilleResidence" placeholder="Pays/Ville de résidence" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="paysVilleResidence">Pays-Ville de résidence *</label>
                                    @error('paysVilleResidence')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('quartierResidence') is-invalid @enderror" value="{{ old('quartierResidence') }}" id="quartierResidence" name="quartierResidence" placeholder="Quartier de résidence" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="quartierResidence">Quartier de résidence *</label>
                                    @error('quartierResidence')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <select class="form-control @error('statutMatrimonial') is-invalid @enderror" id="statutMatrimonial" name="statutMatrimonial">
                                        <option value="">Sélectionner le statut matrimonial</option>
                                        <option value="Célibataire" {{ old('statutMatrimonial') == 'Célibataire' ? 'selected' : '' }}>Célibataire</option>
                                        <option value="Marié(e)" {{ old('statutMatrimonial') == 'Marié(e)' ? 'selected' : '' }}>Marié(e)</option>
                                        <option value="Divorcé(e)" {{ old('statutMatrimonial') == 'Divorcé(e)' ? 'selected' : '' }}>Divorcé(e)</option>
                                        <option value="Veuf(ve)" {{ old('statutMatrimonial') == 'Veuf(ve)' ? 'selected' : '' }}>Veuf(ve)</option>
                                    </select>
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="statutMatrimonial">Statut matrimonial *</label>
                                    @error('statutMatrimonial')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Champ Nom & Prénoms du conjoint, caché initialement -->
                            <div class="col-md-4" id="nomPrenomsConjointDiv" style="display: none;">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('nomPrenomsConjoint') is-invalid @enderror" value="{{ old('nomPrenomsConjoint') }}" id="nomPrenomsConjoint" name="nomPrenomsConjoint" placeholder="Nom & Prénoms du conjoint" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="nomPrenomsConjoint">Nom & Prénoms du conjoint</label>
                                    @error('nomPrenomsConjoint')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="tel" class="form-control @error('tel1') is-invalid @enderror" value="{{ old('tel1') }}" id="tel1" name="tel1" placeholder="Téléphone 1" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="tel1">N° de téléphone 1</label>
                                    @error('tel1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="tel" class="form-control @error('tel2') is-invalid @enderror" value="{{ old('tel2') }}" id="tel2" name="tel2" placeholder="Téléphone 2" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="tel2">N° de téléphone 2</label>
                                    @error('tel2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="email" class="form-control @error('mail') is-invalid @enderror" value="{{ old('mail') }}" id="mail" name="mail" placeholder="Email" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="mail">Mail</label>
                                    @error('mail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('profession') is-invalid @enderror" value="{{ old('profession') }}" id="profession" name="profession" placeholder="Profession" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="profession">Profession *</label>
                                    @error('profession')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <select class="form-control @error('secteurEmploi') is-invalid @enderror" id="secteurEmploi" name="secteurEmploi">
                                        <option value="">Sélectionner un secteur</option>
                                        <option value="Primaire" {{ old('secteurEmploi') == 'Primaire' ? 'selected' : '' }}>Secteur Primaire (Agriculture, Mines, etc.)</option>
                                        <option value="Secondaire" {{ old('secteurEmploi') == 'Secondaire' ? 'selected' : '' }}>Secteur Secondaire (Manufacture, Construction, etc.)</option>
                                        <option value="Tertiaire" {{ old('secteurEmploi') == 'Tertiaire' ? 'selected' : '' }}>Secteur Tertiaire (Services, Éducation, Santé, etc.)</option>
                                        <option value="Quaternaire" {{ old('secteurEmploi') == 'Quaternaire' ? 'selected' : '' }}>Secteur Quaternaire (Information, Recherche, etc.)</option>
                                        <option value="Autre" {{ old('secteurEmploi') == 'Autre' ? 'selected' : '' }}>Autres</option>
                                    </select>
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="secteurEmploi">Secteur d'emploi *</label>
                                    @error('secteurEmploi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <select class="form-control @error('groupeSanguin') is-invalid @enderror" id="groupeSanguin" name="groupeSanguin">
                                        <option value="">Sélectionner un groupe sanguin</option>
                                        <option value="A+" {{ old('groupeSanguin') == 'A+' ? 'selected' : '' }}>A+</option>
                                        <option value="A-" {{ old('groupeSanguin') == 'A-' ? 'selected' : '' }}>A-</option>
                                        <option value="B+" {{ old('groupeSanguin') == 'B+' ? 'selected' : '' }}>B+</option>
                                        <option value="B-" {{ old('groupeSanguin') == 'B-' ? 'selected' : '' }}>B-</option>
                                        <option value="AB+" {{ old('groupeSanguin') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                        <option value="AB-" {{ old('groupeSanguin') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                        <option value="O+" {{ old('groupeSanguin') == 'O+' ? 'selected' : '' }}>O+</option>
                                        <option value="O-" {{ old('groupeSanguin') == 'O-' ? 'selected' : '' }}>O-</option>
                                    </select>
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="groupeSanguin">Groupe sanguin *</label>
                                    @error('groupeSanguin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('nomPersonnePrevenir1') is-invalid @enderror" value="{{ old('nomPersonnePrevenir') }}" id="nomPersonnePrevenir1" name="nomPersonnePrevenir1" placeholder="Nom de la personne à prévenir 1" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="nomPersonnePrevenir1">Nom personne à prévenir 1* </label>
                                    @error('nomPersonnePrevenir1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="tel" class="form-control @error('numPersonnePrevenir1') is-invalid @enderror" value="{{ old('numPersonnePrevenir') }}" id="numPersonnePrevenir1" name="numPersonnePrevenir1" placeholder="N° de la personne à prévenir 1 " />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="numPersonnePrevenir1">Numéro personne à prévenir 1*</label>
                                    @error('numPersonnePrevenir1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('nomPersonnePrevenir2') is-invalid @enderror" value="{{ old('nomPersonnePrevenir2') }}" id="nomPersonnePrevenir2" name="nomPersonnePrevenir2" placeholder="Nom de la personne à prévenir 2" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="nomPersonnePrevenir2">Nom personne à prévenir 2*</label>
                                    @error('nomPersonnePrevenir2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="tel" class="form-control @error('numPersonnePrevenir2') is-invalid @enderror" value="{{ old('numPersonnePrevenir2') }}" id="numPersonnePrevenir2" name="numPersonnePrevenir2" placeholder="N° de la personne à prévenir 2" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="numPersonnePrevenir2">Numéro personne à prévenir 2*</label>
                                    @error('numPersonnePrevenir2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            

                            <!-- Champ caché qui s'affiche seulement si "Autre" est sélectionné -->
                            <div class="col-md-4" id="autreSecteurDiv" style="display: none;">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control @error('autreSecteur') is-invalid @enderror" value="{{ old('autreSecteur') }}" id="autreSecteur" name="autreSecteur" placeholder="Précisez le secteur" />
                                    <label style="font-weight: 600; font-size: 13.5px; color: green;" for="autreSecteur">Précisez le secteur *</label>
                                    @error('autreSecteur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="col-md-4">
                                <h6 style="font-weight: 600; font-size: 13.5px; color: green;">Pièces Justificatives *</h6><br>

                                <!-- CNI -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cniCheckbox" name="cniCheckbox" value="checked" {{ old('cniCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="cniCheckbox">CNI</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="cniUploadDiv" style="{{ old('cniCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="cniFile" name="cniFile">
                                    <label for="cniFile">Téléchargez votre CNI</label>
                                    @error('cniFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Passeport -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="passportCheckbox" name="passportCheckbox" value="checked" {{ old('passportCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="passportCheckbox">Passeport</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="passportUploadDiv" style="{{ old('passportCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="passportFile" name="passportFile">
                                    <label for="passportFile">Téléchargez votre passeport</label>
                                    @error('passportFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Acte de Naissance -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="birthCertCheckbox" name="birthCertCheckbox" value="checked" {{ old('birthCertCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="birthCertCheckbox">Acte de naissance</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="birthCertUploadDiv" style="{{ old('birthCertCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="birthCertFile" name="birthCertFile">
                                    <label for="birthCertFile">Téléchargez votre acte de naissance</label>
                                    @error('birthCertFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificat de Mariage -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="marriageCertCheckbox" name="marriageCertCheckbox" value="checked" {{ old('marriageCertCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="marriageCertCheckbox">Certificat de mariage</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="marriageCertUploadDiv" style="{{ old('marriageCertCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="marriageCertFile" name="marriageCertFile">
                                    <label for="marriageCertFile">Téléchargez votre certificat de mariage</label>
                                    @error('marriageCertFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificat de Nationalité -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nationalityCertCheckbox" name="nationalityCertCheckbox" value="checked" {{ old('nationalityCertCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="nationalityCertCheckbox">Certificat de nationalité</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="nationalityCertUploadDiv" style="{{ old('nationalityCertCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="nationalityCertFile" name="nationalityCertFile">
                                    <label for="nationalityCertFile">Téléchargez votre certificat de nationalité</label>
                                    @error('nationalityCertFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificat de Divorce -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="divorceCertCheckbox" name="divorceCertCheckbox" value="checked" {{ old('divorceCertCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="divorceCertCheckbox">Certificat de divorce</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="divorceCertUploadDiv" style="{{ old('divorceCertCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="divorceCertFile" name="divorceCertFile">
                                    <label for="divorceCertFile">Téléchargez votre certificat de divorce</label>
                                    @error('divorceCertFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificat de Décès du Conjoint -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="deathCertCheckbox" name="deathCertCheckbox" value="checked" {{ old('deathCertCheckbox') == 'checked' ? 'checked' : '' }}>
                                    <label style="margin-left: 20px;" class="form-check-label" for="deathCertCheckbox">Certificat de décès du conjoint</label>
                                </div>
                                <div class="form-floating form-floating-outline" id="deathCertUploadDiv" style="{{ old('deathCertCheckbox') == 'checked' ? 'display: block;' : 'display: none;' }}">
                                    <input type="file" class="form-control" id="deathCertFile" name="deathCertFile">
                                    <label for="deathCertFile">Téléchargez le certificat de décès du conjoint</label>
                                    @error('deathCertFile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                        </div>
                        <div class="mt-4">
                            <button type="submit" style="background-color: green" class="btn btn-primary me-2">SUIVANT</button>
                            <button type="reset" class="btn btn-outline-secondary">EFFACER</button>
                        </div>
                        <br>
                        <br>
                        <h6 style="color: gray; font-weight: 300; font-size: 10px;">* : les informations marquées de ce symbole doivent être obligatoirement fournies</h6>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const uploadDiv = document.getElementById(this.id + 'UploadDiv');
                    uploadDiv.style.display = this.checked ? 'block' : 'none';
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            function updateOnlineStatus() {
                if (navigator.onLine) {
                    document.getElementById('online-message').style.display = 'block';
                    document.getElementById('offline-message').style.display = 'none';
                } else {
                    document.getElementById('online-message').style.display = 'none';
                    document.getElementById('offline-message').style.display = 'block';
                }
            }

            window.addEventListener('online', updateOnlineStatus);
            window.addEventListener('offline', updateOnlineStatus);

            // Initial check
            updateOnlineStatus();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const sexeSelect = document.getElementById('sexe');
            const nomJeuneFilleDiv = document.getElementById('nomJeuneFilleDiv');
            const statutMatrimonialSelect = document.getElementById('statutMatrimonial');
            const nomPrenomsConjointDiv = document.getElementById('nomPrenomsConjointDiv');

            // Écouteur d'événements pour le champ Sexe
            sexeSelect.addEventListener('change', function() {
                nomJeuneFilleDiv.style.display = (this.value === 'Féminin') ? 'block' : 'none';
            });

            // Écouteur d'événements pour le champ Statut Matrimonial
            statutMatrimonialSelect.addEventListener('change', function() {
                nomPrenomsConjointDiv.style.display = (this.value === 'Marié(e)' || this.value === 'Divorcé(e)' || this.value === 'Veuf(ve)') ? 'block' : 'none';
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const secteurSelect = document.getElementById('secteurEmploi');
            const autreSecteurDiv = document.getElementById('autreSecteurDiv');

            secteurSelect.addEventListener('change', function() {
                if (this.value === 'Autre') {
                    autreSecteurDiv.style.display = 'block'; // Afficher le champ
                } else {
                    autreSecteurDiv.style.display = 'none'; // Cacher le champ
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            function toggleUploadDiv(checkboxId, divId) {
                const checkbox = document.getElementById(checkboxId);
                const div = document.getElementById(divId);
                checkbox.addEventListener('change', function() {
                    div.style.display = this.checked ? 'block' : 'none';
                });
            }

            toggleUploadDiv('cniCheckbox', 'cniUploadDiv');
            toggleUploadDiv('passportCheckbox', 'passportUploadDiv');
            toggleUploadDiv('birthCertCheckbox', 'birthCertUploadDiv');
            toggleUploadDiv('marriageCertCheckbox', 'marriageCertUploadDiv');
            toggleUploadDiv('nationalityCertCheckbox', 'nationalityCertUploadDiv');
            toggleUploadDiv('divorceCertCheckbox', 'divorceCertUploadDiv');
            toggleUploadDiv('deathCertCheckbox', 'deathCertUploadDiv');
        });
    </script>
    <script src="{{ asset('js/loading.js') }}"></script>
    <script src="https://kit.fontawesome.com/e00702b042.js" crossorigin="anonymous"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js"></script>    
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/libs/jquery/jquery.js?id=fbe6a96815d9e8795a3b5ea1d0f39782"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/libs/popper/popper.js?id=bd2c3acedf00f48d6ee99997ba90f1d8"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/js/bootstrap.js?id=0a1f83aa0a6a7fd382c37453e3f11128"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/libs/node-waves/node-waves.js?id=0ca80150f23789eaa9840778ce45fc5c"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=f4192eb35ed7bdba94dcb820a77d9e47"></script>
    <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template-free/demo/assets/vendor/js/menu.js?id=201bb3c555bc0ff219dec4dfd098c916"></script>
    @notifyJs
    @livewireScripts
</body>

</html>