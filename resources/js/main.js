document.addEventListener('DOMContentLoaded', () => {
// burder-header-nav -----------------------------------------------

const burgerHeader = document.getElementById('burger-header');

const headerNav = document.getElementById('header_nav');

let nav = false;

burgerHeader.addEventListener('click', getNav);

function getNav() {
    nav = !nav;

    if(nav) {
        headerNav.classList.remove('-translate-y-80');
        headerNav.classList.remove('hidden');
        headerNav.classList.add('translate-y-80');
    } else {
        headerNav.classList.remove('translate-y-80');
        headerNav.classList.add('-translate-y-80');
        headerNav.classList.add('hidden');
    }
}

//------------------------------------------------------------------

let position = 0;

let scrollPositionBtn = document.querySelectorAll('.scroll_position_btn');

let resetScrollPosition = document.querySelectorAll('.reset_scroll_position');

for(let q = 0; q < resetScrollPosition.length; q++) {
    resetScrollPosition[q].addEventListener('click', () => {
        delete localStorage.homeScroll;
    })
}

for(let k = 0; k < scrollPositionBtn.length; k++) {
    scrollPositionBtn[k].addEventListener('click', () => {
       screenPosition(position);
    }); 
}

addEventListener('DOMContentLoaded', () => {
   window.scrollTo(0, localStorage.homeScroll);
});

window.addEventListener('scroll', () => {
    position = window.scrollY;
});

function screenPosition(position) {
    delete localStorage.homeScroll;
    localStorage.homeScroll = position;
}



});