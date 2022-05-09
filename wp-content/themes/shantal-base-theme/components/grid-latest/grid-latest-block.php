<div class="sh-grid-block-outer">
    <div class="sh-grid-block-inner">
        <div class="sh-grid-block">
            <?php 
                switch ($args['grid-type']) {
                    case 'blog':
                        get_template_part('components/blog-posts/blog-posts', 'grid-content');
                        break;
                    
                    case 'team':
                        get_template_part('components/team-grid/team', 'grid-content');
                        break;
                    
                    default:
                        get_template_part('components/blog-posts/blog-posts', 'grid-content');
                        break;
                }
            ?>
        </div>
    </div>
</div>