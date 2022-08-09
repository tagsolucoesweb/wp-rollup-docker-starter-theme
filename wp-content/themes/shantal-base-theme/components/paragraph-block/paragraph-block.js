import './paragraph-block-styles.scss';

let accordionTrigger = document.querySelector('.sh-accordion-btn-wrap a')

if(accordionTrigger != null){
    let accordionContent = document.querySelector('.sh-accordion-content')
    let accordionInnerContent = document.querySelector('.sh-accordion-content-inner')
    let openHeight = accordionInnerContent.clientHeight
    let closeHeight = accordionContent.clientHeight
    
    accordionTrigger.addEventListener('click', function(e){
        e.preventDefault()
        accordionContent.classList.toggle('accordion-open')
        if(accordionContent.classList.contains('accordion-open')){
            accordionContent.style.height = openHeight+'px' 
        }else{
            accordionContent.style.height = closeHeight+'px'
        }
    })
}

