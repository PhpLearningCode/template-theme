        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="copyright col-sm-7 col-4">
                        <p> Copyright © 2024 William Souza </p>
                    </div>
                    <nav class="footer-menu col-sm-5 col-8 text-right">
                        <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'footer_menu',
                            ) ); 
                        ?>
                    </nav>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </body>
</html>