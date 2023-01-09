// create logotype code on textarea------------------------------------------------>

let selectOptionLogo = document.querySelector('.select_logo_position');

let textPositionLogo = document.querySelector('.logo-position-code');

textPositionLogo.textContent = "<a href='http://127.0.0.1:8000' target='_blank' style='position: absolute; z-index:99999; top: 10px; right: 20px;'>" +
                                "<img src='http://127.0.0.1:8000/storage/l2tops.fun-logo.png' alt='l2high.top' title='Рейтинг серверов Linage 2'/></a>"


selectOptionLogo.addEventListener('change', (event) => {
    getOptionPosition(event.target.value);
});

function getOptionPosition(position) {
    switch(position) {
        case('topR') : 
            textPositionLogo.value = "<a href='http://127.0.0.1:8000' target='_blank' style='position: absolute; z-index:99999; top: 10px; right: 20px;'>" + 
            "<img src='http://127.0.0.1:8000/storage/l2tops.fun-logo.png' alt='l2tops.net' title='Рейтинг серверов Linage 2'/>" +
            "</a>";
        break;
        case('topL') :
            textPositionLogo.value = "<a href='http://127.0.0.1:8000' target='_blank' style='position: absolute; z-index:99999; top: 10px; left: 20px;'>" + 
            "<img src='http://127.0.0.1:8000/storage/l2tops.fun-logo.png' alt='l2tops.net' title='Рейтинг серверов Linage 2'/>" +
            "</a>"; 
        break     
        case('botR') :
            textPositionLogo.value = "<a href='http://127.0.0.1:8000' target='_blank' style='position: absolute; z-index:99999; bot: 10px; right: 20px;'>" + 
            "<img src='http://127.0.0.1:8000/storage/l2tops.fun-logo.png' alt='l2tops.net' title='Рейтинг серверов Linage 2'/>" +
            "</a>"; 
        break     
        case('botL') :
            textPositionLogo.value = "<a href='http://127.0.0.1:8000' target='_blank' style='position: absolute; z-index:99999; bot: 10px; left: 20px;'>" + 
            "<img src='http://127.0.0.1:8000/storage/l2tops.fun-logo.png' alt='l2tops.net' title='Рейтинг серверов Linage 2'/>" +
            "</a>"; 
        break  
        default :
            textPositionLogo.value = 'Default'; 
    }
}
//-------------------------------------------------------------------------/>

//validation form----------------------------------------------------------->

let inputTitle = document.getElementById('title');

let patternTitle = /^[A-Za-z0-9.-]{0,20}$/;

inputTitle.addEventListener('input', (event) => {
    checkValidData(inputTitle ,patternTitle.test(event.target.value));
});

inputTitle.addEventListener('blur', () => {
    checkFocus(inputTitle);
});

inputTitle.addEventListener('focus', (event) => {
    checkValidData(inputTitle, patternTitle.test(event.target.value));
});


let inputWebsite = document.getElementById('website');

let patternWebsite = /^((https?|ftp)\:\/\/)?([a-z0-9]{1})((\.[a-z0-9-])|([a-z0-9-]))*\.([a-z]{2,6})(\/?)$/;

inputWebsite.addEventListener('input', (event) => {
    checkValidData(inputWebsite ,patternWebsite.test(event.target.value));
});

inputWebsite.addEventListener('blur', () => {
    checkFocus(inputWebsite);
});

inputWebsite.addEventListener('focus', (event) => {
    checkValidData(inputWebsite, patternWebsite.test(event.target.value));
});



let inputRates = document.getElementById('rates');

let patternRates = /^[GVE]{3}$|^[RvR]{3}$|^([1-9])(\d{1,6})$|^(\d(?:[\.,]\d)?)$/i;

inputRates.addEventListener('input', (event) => {
    
    checkValidData(inputRates ,patternRates.test(event.target.value));
    
});

inputRates.addEventListener('blur', () => {
    checkFocus(inputRates);
});

inputRates.addEventListener('focus', (event) => {
    
    checkValidData(inputRates, patternRates.test(event.target.value));
    
});

function checkValidData(input, state) {
    if(!state) {
        input.style.border = '1px red solid';
    } else {
        input.style.border = '1px green solid';
    }
}

function checkFocus(input) {
    input.style.border = 'none';
}


