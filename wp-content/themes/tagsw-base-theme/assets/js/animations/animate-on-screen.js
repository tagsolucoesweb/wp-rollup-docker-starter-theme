import './animate-on-screen-styles.scss'

const animateOnScreenEl = document.querySelectorAll('.animate-on-screen') 

animateOnScreenEl.forEach( function(el) {
    const observer = new IntersectionObserver(function(entries) {
        if(entries[0].isIntersecting === true)
            //console.log('screen')
            if (el.classList.contains('animate-appear')){
                animateAppear(el);
            }
    }, { threshold: [1] });    
    
    observer.observe(el);
})

function animateAppear(el){
    el.classList.remove('animate-appear')
    el.classList.add('animate-appear-done')
}


const animateOnScrollEl = document.querySelectorAll('.animate-on-scroll')

animateOnScrollEl.forEach( function(el) {
    if (el.classList.contains('from-bottom')){
        animateScroll(el);
    }
})

function animateScroll(el){
    
    el.style.transform = 'translateY( '+( 100*2 )+'% )'
    window.addEventListener('scroll', () => {
        let scrollPos = 1 -( window.pageYOffset / (document.body.offsetHeight - window.innerHeight))
        if( scrollPos > 0 ){
            el.style.transform = 'translateY( '+( scrollPos * 100 * 2 )+'% )'
        }
    })    
}