window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToShow: 1,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        },
    });
})

const sideMenu = document.querySelector("#nav-lat");
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener("click", () =>{
    sideMenu.style.display = 'flex';
}); 

closeBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'none';
});

function LOGOTIPO(){
    console.log("DANDO CLICK EN EL LOGOTIPO");
}