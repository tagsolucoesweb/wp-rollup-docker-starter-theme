import './main-nav.scss'


let menuCallBtn = document.querySelector('#menu-toggle')
let closeMenuBtn = document.querySelector('.close-menu-toggle')

menuCallBtn.addEventListener('click', toggleMenu)
closeMenuBtn.addEventListener('click', toggleMenu)

function toggleMenu(){
    let menuElement = document.querySelector('.main-menu-wrap')
    menuElement.classList.toggle('active')
}