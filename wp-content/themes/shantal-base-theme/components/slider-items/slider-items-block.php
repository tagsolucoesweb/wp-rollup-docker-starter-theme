<div class="sh-slider-outer">
    <div class="sh-slider-inner">   
        <?php switch ($args['slider-type']) {
            case 'testimonial':
                get_template_part('components/testimonial-slider/testimonial', 'slider-content', $args);
                break;
            case 'galeria':
                get_template_part('components/galeria-slider/galeria', 'slider-content', $args);
                break;
            case 'especialidades':
                get_template_part('components/slider-default-content/especialidades', 'slider-content', $args);
                break;
            default:
                get_template_part('components/slider-default-content/slider-default-content', 'block', $args);
                break;
        }?>
        <div class="sh-slider-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.677 18.52c.914 1.523-.183 3.472-1.967 3.472h-19.414c-1.784 0-2.881-1.949-1.967-3.472l9.709-16.18c.891-1.483 3.041-1.48 3.93 0l9.709 16.18z"/></svg>
        </div>
        <div class="sh-slider-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.677 18.52c.914 1.523-.183 3.472-1.967 3.472h-19.414c-1.784 0-2.881-1.949-1.967-3.472l9.709-16.18c.891-1.483 3.041-1.48 3.93 0l9.709 16.18z"/></svg>
        </div>
    </div>
</div>