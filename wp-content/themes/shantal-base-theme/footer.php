        <footer class="shantal-footer-outer">
            <div class="shantal-footer-inner">
                <div class="shantal-footer-content">
                    <div class="shantal-footer-item">
                        <h2>Shantal Base</h2>
                    </div>
                    <div class="shantal-footer-item">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ));?>         
                    </div>
                    <div class="shantal-footer-item">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ));?>
                    </div>
                    <div class="shantal-footer-item">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-social' ));?>
                    </div>
                </div>
                <div class="shantal-footer-bottom">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-bottom' ));?>         
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>