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
