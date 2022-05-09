<div class="sh-slider-outer">
    <div class="sh-slider-inner">   
        <?php switch ($args['slider-type']) {
            case 'testimonial':
                get_template_part('components/testimonial-slider/testimonial', 'slider-content', $args);
                break;
                
            default:
                get_template_part('components/slider-default-content/slider-default-content', 'block', $args);
                break;
        }?>
        <div class="sh-slider-prev">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 11.5L24 18.5L15.5 26.5" stroke="#51A8B1" stroke-width="2"/>
                <circle cx="19" cy="19" r="18" stroke="#51A8B1" stroke-width="2"/>
            </svg>
        </div>
        <div class="sh-slider-next">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 11.5L24 18.5L15.5 26.5" stroke="#51A8B1" stroke-width="2"/>
                <circle cx="19" cy="19" r="18" stroke="#51A8B1" stroke-width="2"/>
            </svg>
        </div>
    </div>
</div>