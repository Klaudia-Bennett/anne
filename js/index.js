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

// 期間限定スライドショー
const limited = document.querySelectorAll('.limited__content a');
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
let slide_show = setInterval(slide, 5000);

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
// スクロールアクション
const menus = document.querySelectorAll('.menu__item');
const chara = document.querySelectorAll('.chara__photo');
const cakes = document.querySelectorAll('.cake__photo');
const deliCrepes = document.querySelectorAll('.deli__photo');
const scrollAction = (entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return
        }
        entry.target.classList.add('active')
    }
    )
}

let options1 = {
    root: null,
    rootMargin: "-50% 0px",
    threshold: 0,
}
let options2 = {
    root: null,
    rootMargin: "-30% 0px",
    threshold: 0,
}

const observer1 = new IntersectionObserver(scrollAction, options1);
const observer2 = new IntersectionObserver(scrollAction, options2);

menus.forEach(menu => {
    observer1.observe(menu);
})
chara.forEach(character => {
    observer2.observe(character);
})
cakes.forEach(cake => {
    observer2.observe(cake);
})

deliCrepes.forEach(crepe => {
    observer2.observe(crepe);
})

// スクロール時の背景
const harry_area = document.querySelector('.harry-area');
const harry_illust = document.querySelector('.pc__illust-harry');
const harry_move = document.querySelector('.pc__illust--harry');
const ruka_area = document.querySelector('.ruka-area');
const ruka_illust = document.querySelector('.pc__illust-ruka');
const ruka_move = document.querySelector('.pc__illust--ruka');

const harryScroll = (entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            harry_illust.classList.remove('active');
            harry_move.classList.remove('active');
        }
        else {
            harry_illust.classList.add('active');
            harry_move.classList.add('active');
        }
    }
    )
}
const rukaScroll = (entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            ruka_illust.classList.remove('active');
            ruka_move.classList.remove('active');

        }
        else {
            ruka_illust.classList.add('active');
            ruka_move.classList.add('active');

        }
    }
    )
}

let options_bg = {
    root: null,
    rootMargin: "-50% 0px",
    threshold: 0,
}
const observer_harry = new IntersectionObserver(harryScroll, options_bg);
const observer_ruka = new IntersectionObserver(rukaScroll, options_bg);
observer_harry.observe(harry_area);
observer_ruka.observe(ruka_area);
