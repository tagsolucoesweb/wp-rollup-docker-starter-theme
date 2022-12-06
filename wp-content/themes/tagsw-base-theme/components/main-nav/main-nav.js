import './main-nav.scss'


let menuCallBtn = document.querySelector('#menu-toggle')
let closeMenuBtn = document.querySelector('.close-menu-toggle')

menuCallBtn.addEventListener('click', toggleMenu)
closeMenuBtn.addEventListener('click', toggleMenu)

function toggleMenu(){
    let menuElement = document.querySelector('.main-menu-wrap')
    menuElement.classList.toggle('active')
}

let dropDownMenu = document.querySelectorAll('.menu-item-has-children');
dropDownMenu.forEach(function (menuItem) {
    let subMenu = menuItem.querySelector('.sub-menu');
    let subMenuHeight = subMenu.scrollHeight;
    subMenu.style.height = '0px';
    subMenu.style.visibility = 'visible';
	menuItem.addEventListener('mouseover', function(event){
        event.preventDefault();
        if(subMenu.classList.contains('active')){
            subMenu.style.height = '0px';
            subMenu.classList.remove('active');
        }else{
            subMenu.style.height = subMenuHeight + "px";
            subMenu.classList.add('active');
        }    
    });

    menuItem.addEventListener('mouseout', function(){
        if(subMenu.classList.contains('active')){
            subMenu.style.height = '0px';
            subMenu.classList.remove('active');
        }
    });
    //reset subMenuHeight on resize;
    window.addEventListener('resize', function() {
        subMenu.style.visibility = 'hidden';
        subMenu.style.height = 'auto';
        setTimeout(function() {
            //little delay to avoid get height in animation
            subMenuHeight = subMenu.scrollHeight;
            subMenu.style.height = '0px';
            subMenu.style.visibility = 'visible';
        }, 500);
    }, true);
});
