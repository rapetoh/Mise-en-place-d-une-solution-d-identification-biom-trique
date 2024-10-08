let form, div, button, indicate, curPage, emn;
form = document.querySelector('form');
div = document.getElementsByClassName('form')
button = document.getElementsByTagName('button');
indicate = document.querySelector('.page-indicator');
curPage = 0;
emn = indicate.getElementsByTagName('em');


window.onload = createIndicator;
form.onsubmit =()=>{return false;}

function createIndicator(){
    for(let i=0; i<div.length; i++){
        const em = document.createElement('em');
        em.id = i;
        if (i==0) {em.className = 'cur-page'}
        indicate.appendChild(em);
    }
}

button[1].onclick = validate;
button[0].onclick = ()=>{
    if (curPage > 0){curPage --;}
    if (curPage<1) {button[0].style.display = 'none';}
    if (curPage<div.length-1) {button[1].textContent = 'Next';}
    dispayPage(curPage);
    activeIndicator(curPage);
}

function validate(){
    const activePage = document.querySelector('.active')
    const field = activePage.getElementsByClassName('field');
    let inputFirst = field[0].children[1];
    let inputLast = field[1].children[1];
    if (inputFirst.value != '' && inputLast.value != ''){
        curPage++;
        button[0].style.display = 'block';
        if (curPage>div.length-2) {button[1].textContent = 'Sign Up';}
        if (curPage >= div.length) {
            form.onsubmit =()=>{return true;}
        }
        dispayPage(curPage);
        activeIndicator(curPage);
    }
    if (inputFirst.value == '') {hide(inputFirst);}
    if (inputLast.value == '') {hide(inputLast);}
}
function dispayPage(page) {
    for(let i of div)i.classList.remove('active');
    div[page].classList.add('active');
}

function hide(input){
    input.nextElementSibling.textContent = "This field is empty";
    setTimeout(()=>{
        input.nextElementSibling.textContent = "";
    }, 2000);
}
function activeIndicator(page){
    for(let i of emn)i.classList.remove('cur-page');
    emn[page].classList.add('cur-page');

}


const cpiInputs = document.querySelectorAll('.cpi-input');

if (cpiInputs) {
    
    cpiInputs.forEach((cpiInput) => {
        let cpiInputDropItems = cpiInput.querySelectorAll('.dropdown-item');
        let cpiDropBtn = cpiInput.querySelector('.cpi-drop');
        let cpiExtTxt = cpiInput.querySelector('.cpi-ext-txt');
        let countryCodeInput = cpiInput.querySelector('.country-code-input');
        let phoneInput = cpiInput.querySelector('.phone-input');

        phoneInput.addEventListener('focus', () => {
            cpiInput.classList.add('cpi-input-focus');
        });

        phoneInput.addEventListener('blur', () => {
            cpiInput.classList.remove('cpi-input-focus');
        });

        if (cpiInputDropItems) {
            cpiInputDropItems.forEach((cpiInputDropItem) => {
                cpiInputDropItem.addEventListener('click', (event) => {
                    let dataSet = event.target.dataset;

                    cpiDropBtn.innerHTML = `<span class="me-1">${dataSet.cpiIcon}</span>`;
                    cpiExtTxt.innerHTML = dataSet.cpiExt;
                    countryCodeInput.value = dataSet.cpiExt;

                    // reset to default to avoid error
                    phoneInput.minLength = 0;
                    phoneInput.maxLength = 524288;

                    phoneInput.minLength = `${dataSet.cpiMinLength}`;
                    phoneInput.maxLength = `${dataSet.cpiMaxLength}`;
                    phoneInput.focus();
                });
            });
        }
    });
}