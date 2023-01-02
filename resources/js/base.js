// nav burger /////////////////////////////////////////////////

const burgerButton = document.getElementById('burger-button');
const mobailNav = document.querySelector('.mobail-nav');

let state = false;

burgerButton.addEventListener('click', update_state);

function update_state() {

    state = !state

    if(state) {
        mobailNav.classList.remove('hidden');
        burgerButton.classList.add('text-blue-500');  
    } else {
        mobailNav.classList.add('hidden');
        burgerButton.classList.remove('text-blue-500');
    }

}

//////////////////////////////////////////////////////////////
