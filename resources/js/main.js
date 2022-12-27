// burder-header-nav -----------------------------------------------

const burger_header = document.getElementById('burger-header');

const header_nav = document.getElementById('header_nav');

let navState = false;

burger_header.addEventListener('click', getNav);

function getNav() {
    navState = !navState;

    if(navState) {
        header_nav.classList.remove('-translate-y-80');
        header_nav.classList.remove('hidden');
        header_nav.classList.add('translate-y-80');
    } else {
        header_nav.classList.remove('translate-y-80');
        header_nav.classList.add('-translate-y-80');
        header_nav.classList.add('hidden');
    }
}

//------------------------------------------------------------------
