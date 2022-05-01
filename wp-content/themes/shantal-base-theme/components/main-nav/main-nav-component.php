<nav>
    <div class="main-menu-wrap">
        <?php get_template_part('components/logo/logo', 'component');?>
        <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu',
        ));?>
        <span class="close-menu-toggle"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg></span>
    </div>
    <div class="obj-header-icons">
        <span id="menu-toggle">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
        </span>
    </div>
</nav>