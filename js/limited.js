'use-strick';
// ハンバーガーメニュー
const ham = document.querySelector('.header__ham');
const nav = document.querySelector('.nav--ham');
const nav_links = document.querySelectorAll('.nav__item a');
ham.addEventListener('click', () => {
    if (!nav.classList.contains('active')) {
        nav.classList.remove('back')
        nav.classList.add('active');
        ham.classList.remove('back');
        ham.classList.add('active');
    }
    else {
        nav.classList.remove('active');
        nav.classList.add('back');
        ham.classList.remove('active');
        ham.classList.add('back');
    }
})
const anchors = document.querySelectorAll('.nav--ham a');
console.log(anchors);
anchors.forEach(a => {
    a.addEventListener('click', () => {
        nav.classList.remove('active');
        nav.classList.remove('back');
        ham.classList.remove('active');
        ham.classList.remove('back');
    })
})
// モーダルウィンドウ
const guide_pc = document.querySelector('.pc__guide');
const modal = document.querySelector('.modal');
const guide_mobile = document.querySelector('.mobile__guide');
guide_pc.addEventListener('click', () => {
    if (!modal.classList.contains('active')) {
        modal.classList.add('active');
    }
    else {
        modal.classList.remove('active');
    }
})
guide_mobile.addEventListener('click', () => {
    if (!modal.classList.contains('active')) {
        modal.classList.add('active');
    }
    else {
        modal.classList.remove('active');
    }
})

modal.addEventListener('click', () => {
    modal.classList.remove('active');
})


// 期間限定スライドショー
const limited = document.querySelectorAll('.limited__image');
const btns = [];
const ul = document.querySelector('.limited__btns');
limited[0].classList.add('limited__image--first');
limited[0].classList.add('active');

for (let i = 0; i < limited.length; i++) {
    const limited_btn = document.createElement('li');
    limited_btn.classList.add('limited__btn');
    ul.append(limited_btn);
    btns.push(limited_btn);
}

btns[0].classList.add('active');
let active = 0;

const slide = () => {
    active++;
    if (active < limited.length) {
        limited[active - 1].classList.remove('active');
        btns[active - 1].classList.remove('active');
        limited[active].classList.add('active');
        btns[active].classList.add('active');
    }
    else {
        limited[active - 1].classList.remove('active');
        btns[active - 1].classList.remove('active');
        limited[0].classList.add('active');
        btns[0].classList.add('active');
        active = 0;
    }
}
let slide_show = setInterval(slide, 3000);

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', () => {
        clearInterval(slide_show)
        btns[active].classList.remove('active');
        limited[active].classList.remove('active');
        btns[i].classList.add('active');
        limited[i].classList.add('active');
        active = i;
        slide_show = setInterval(slide, 3000);
    })
}