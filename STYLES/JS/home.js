let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2500,
    delay: 400,
    reset: true
});
sr.reveal('.banner-text',{delay:200, origin:'top'});
sr.reveal('.banner-img',{delay:400, origin:'top'});
sr.reveal('.icons',{delay:600, origin:'left'});

