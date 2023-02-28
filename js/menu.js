'use-strict';
const ham = document.querySelector('.header__ham');
const nav = document.querySelector('.nav--ham');
ham.addEventListener('click', () => {
    if (!nav.classList.contains('active')) {
        nav.classList.remove('back');
        ham.classList.remove('back');
        nav.classList.add('active');
        ham.classList.add('active');
    }
    else {
        nav.classList.remove('active');
        ham.classList.remove('active');
        nav.classList.add('back');
        ham.classList.add('back');
    }
})

const menus = document.querySelectorAll('.menu__item');
menus.forEach(menu => {
    menu.classList.add('active');
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
