// banner dashboard page /////////////////////////////////////

const banners = document.querySelectorAll('.banner');

const bannerBtn = document.querySelectorAll('.banner_btn');

const slideBannerForm = document.querySelectorAll('.slide_banner_form');

const btnOpenSlideForm = document.querySelectorAll('.btn_open_slide_form');

const closeSlideForm = document.querySelectorAll('.close_slide_form');

addActive(0);

for(let i = 0; i < banners.length; i++) {
    banners[i].addEventListener('click', (event) => {
        if(event.target.className === 'banner') {
            addActive(i);
        }
    });
    btnOpenSlideForm[i].addEventListener('click', () => {
        openOption(i);
    });
    closeSlideForm[i].addEventListener('click', () => {
        closeOption();
        addActive(i);
    });
}

function closeOption() {
    slideBannerForm.forEach(slide => {
        slide.classList.add('hidden');
    });
}

function openOption(index) {
    bannerBtn[index].classList.remove('flex');
    bannerBtn[index].classList.add('hidden');
    slideBannerForm[index].classList.remove('hidden');
}

function addActive(banner) {
    clearActive();
    closeOption();
    banners[banner].classList.add('active');
    setTimeout(() => {
        bannerBtn[banner].classList.remove('hidden');
        bannerBtn[banner].classList.add('flex');
    }, 500);
}

function clearActive() {
    for(let j = 0; j < banners.length; j++) {
        banners[j].classList.remove('active');
        bannerBtn[j].classList.remove('flex');
        bannerBtn[j].classList.add('hidden');
    }
}

//////////////////////////////////////////////////////////////

// vip banner ////////////////////////////////////////////////

const vipBannerContainer = document.getElementById('vip_banner_container');

const vipBannerForm = document.getElementById('vip_banner_form');

const getVipFormBtn = document.getElementById('get_vip_form_btn');

const vipBtnGroup = document.querySelector('.vip_btn_group');

const btnCloseForm = document.querySelector('.btn-close-form');

getVipFormBtn.addEventListener('click', openForm);

btnCloseForm.addEventListener('click', closeForm);

function openForm() {
    vipBannerContainer.classList.remove('items-end');
    vipBannerForm.classList.remove('hidden');
    vipBtnGroup.classList.add('hidden');
}

function closeForm() {
    vipBannerContainer.classList.add('items-end');
    vipBannerForm.classList.add('hidden');
    vipBtnGroup.classList.remove('hidden');
}

//--------------------------------------------------------------------

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
})

window.addEventListener('scroll', () => {
    position = window.scrollY;
});

function screenPosition(position) {
    delete localStorage.scroll;
    localStorage.scroll = position;
}


//-----------------------------------------------------------------
