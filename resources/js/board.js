document.addEventListener('DOMContentLoaded', () => {
// check scroll position 

let position = 0;

let scrollPositionBtn = document.querySelectorAll('.scroll_position_btn');

let resetScrollPosition = document.querySelectorAll('.reset_scroll_position');

for(let q = 0; q < resetScrollPosition.length; q++) {
    resetScrollPosition[q].addEventListener('click', () => {
        delete localStorage.scroll;
    })
}

for(let k = 0; k < scrollPositionBtn.length; k++) {
    scrollPositionBtn[k].addEventListener('click', () => {
       screenPosition(position);
    }); 
}

addEventListener('DOMContentLoaded', () => {
   window.scrollTo(0, localStorage.scroll);
});

window.addEventListener('scroll', () => {
    position = window.scrollY;
});

function screenPosition(position) {
    delete localStorage.scroll;
    localStorage.scroll = position;
}


//-----------------------------------------------------------------

//form add banner script------------------------------------------>

let cancelFormBtn = document.querySelector('.cancel_form_btn');

let btnBlocksControll = document.querySelector('.btns_block_controll');

let formAddBanner = document.querySelector('.form_add_banner');

let btnAddBanner = document.getElementById('btn_add_banner');

if(cancelFormBtn) {
cancelFormBtn.addEventListener('click', (event) => {
    event.preventDefault();
    formAddBanner.classList.add('hidden');
    btnBlocksControll.classList.remove('hidden');
});
}

if(btnAddBanner) {
btnAddBanner.addEventListener('click', () => {
    btnBlocksControll.classList.add('hidden');
    formAddBanner.classList.remove('hidden');
});
}

///////////////////////////////////////////--------------------------/>

//Update price------------------------------------------------------->

let btnGetUpdatePrice = document.querySelectorAll('.get_form_price_update');

let formUpdatePrice = document.querySelectorAll('.form_update_price');

let showPrice = document.querySelectorAll('.show_price');

let btnCloseFormPrice = document.querySelectorAll('.close_form_update_price');

for(let b = 0; b < btnGetUpdatePrice.length; b++) {
    btnGetUpdatePrice[b].addEventListener('click', () => {
        clearState();
        openForm(b);
    });
    btnCloseFormPrice[b].addEventListener('click', () => {
        closeForm(b);
    });
}

function openForm(index) {
    btnGetUpdatePrice[index].classList.add('hidden');
    showPrice[index].classList.add('hidden');
    formUpdatePrice[index].classList.remove('hidden');
}

function closeForm(index) {
    btnGetUpdatePrice[index].classList.remove('hidden');
    showPrice[index].classList.remove('hidden');
    formUpdatePrice[index].classList.add('hidden');
}

function clearState() {
    for(let i = 0; i < btnGetUpdatePrice.length; i++) {
        closeForm(i);
    } 
}

//---------------------------------------------------------------------/>

// all-projects page script--------------------------------------------->

let btnGetOption = document.querySelectorAll('.get_option_project');

let projectCard = document.querySelectorAll('.project_card');

let optionFormProject = document.querySelectorAll('.option_form_project');

let btnCloseOption = document.querySelectorAll('.btn_close_option');


for(let project = 0; project < projectCard.length; project++) {
    btnGetOption[project].addEventListener('click', () => {
        clearGetOption();
        openOption(project);
    });

    btnCloseOption[project].addEventListener('click', (event) => {
        event.preventDefault();
        closeOption(project);
    });
}

function openOption(index) {
    projectCard[index].classList.add('hidden');
    optionFormProject[index].classList.remove('hidden');
}

function closeOption(index) {
    projectCard[index].classList.remove('hidden');
    optionFormProject[index].classList.add('hidden');
}

function clearGetOption() {
    for(let close = 0; close < projectCard.length; close++) {
        closeOption(close);
    }
}

//-------------------------------------------------------------------------/>

    //General page dashboard block gradient------------------------------------->
    
    let colorInput = document.querySelector('.color_code_input');
    
    let container = document.querySelector('.container');
    
    let resetGradient = document.querySelector('.reset_gradient_input');
    
    if(colorInput) {
        colorInput.addEventListener('input', (event) => {
            container.style.background = 'linear-gradient('+event.target.value+')';
        });
    }
    
    if(resetGradient) {
    resetGradient.addEventListener('click', (event) => {
        event.preventDefault();
        colorInput.value = '';
        container.style.background = '';
    });
    }   

});