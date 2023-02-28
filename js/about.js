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


const photo_box = document.querySelectorAll('.intro-detail__photo-box');
const photo = document.querySelectorAll('.intro-detail__photo');
const photo_text = document.querySelectorAll('.intro-detail__text');
const scrollAction = (entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }
        else {
            entry.target.classList.add('active');
        }
    })
}
let options = {
    root: null,
    rootMargin: "-30% 0px",
    threshold: 0
}
let options2 = {
    root: null,
    rootMargin: "-10% 0px",
    threshold: 0
}
const observer = new IntersectionObserver(scrollAction, options);
const observerText = new IntersectionObserver(scrollAction, options2);
photo_box.forEach(box => {
    observer.observe(box);
})
photo.forEach(photo => {
    observer.observe(photo);
})
photo_text.forEach(text => {
    observerText.observe(text);
})