    <?php get_header() ?>
    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header-image" />
    <div class="content-area">
        <main>
            <section class="carousel">
                <div class="container">
                    <div class="row">Carousel</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4">Sidebar</aside>
                        <div class="news col-md-8">
                            <!-- First part of Mainloop -->
                            <?php 
                                if (have_posts(  )){
                                    while( have_posts(  )){
                                        the_post(  );
                            // Using the retrieved data of Mainloop at the Wordpress Site while calling a template part
                                        get_template_part( 'template-parts/content', get_post_format( ) ); 
                                    }
                                }
                                else {
                            ?>
                                <p>There's nothing yet to be displayed...</p>
                            <?php } ?>
                            <!-- End of Mainloop -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Mapa</div>
                </div>
            </section>
        </main>
    </div>
    <?php get_footer() ?>
