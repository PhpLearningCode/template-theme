    <?php get_header() ?>
    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header-image" />
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
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
                        <?php get_sidebar( 'blog' ); ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php get_footer() ?>
