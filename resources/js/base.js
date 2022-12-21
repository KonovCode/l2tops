// nav burger /////////////////////////////////////////////////

const burger_button = document.getElementById('burger-button');
const mobail_nav = document.querySelector('.mobail-nav');

let nav_state = false;

burger_button.addEventListener('click', update_state);

function update_state() {

    nav_state = !nav_state

    if(nav_state) {
        mobail_nav.classList.remove('hidden');
        burger_button.classList.add('text-blue-500');  
    } else {
        mobail_nav.classList.add('hidden');
        burger_button.classList.remove('text-blue-500');
    }

}

//////////////////////////////////////////////////////////////
