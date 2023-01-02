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

});