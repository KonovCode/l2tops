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

// desctop slider home page-----------------------------------------

const slides = document.querySelectorAll('.slide');

let activeSlide = 0;
let time = 3000;

for(let i = 0; i < slides.length; i++) {
    slides[i].addEventListener('click', () => {
        selectSlide(i);
    });
}

let timer = setTimeout(start, time);

function start() {
    clearActivePrevSlide();
    addActive(slides[activeSlide]);
    activeSlide <= 5 ? activeSlide++ : activeSlide = 0;
    timer = setTimeout(start, time); 
  }

function addActive(slide) {
    slide.classList.add('active');
}

function clearActivePrevSlide() {
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    time = 3000;
}

function selectSlide(slide) {
    clearTimeout(timer);
    clearActivePrevSlide();
    addActive(slides[slide]);
    timer = setTimeout(start, 5000)
}

//------------------------------------------------------------