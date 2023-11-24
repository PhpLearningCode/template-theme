<?php get_header() ?>
    <div class="content-area">
        <main>
            <section class="carousel">
                <?php echo do_shortcode( '[recent_post_slider design="design-2" limit="5"]' ); ?>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <?php get_sidebar( 'home' ); ?>
                        <div class="news col-md-8">
                            <!-- First part of Mainloop -->
                            <div class="container">
                                <h1>Latest News</h1>
                                <div class="row">
                                    <?php 
                                        // First Loop
                                        // Creating WP_Query object with custom loop
                                        $featured = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 1,
                                            'cat' => '3,6',
                                        ));

                                        if( $featured->have_posts(  )){
                                            while($featured->have_posts(  )) {
                                                $featured->the_post(  );
                                            ?>
                                            <!-- Using the loop data with a called template -->
                                            <div class="col-12">
                                                <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                            </div>

                                            <?php
                                            // reseting custom loop data
                                                wp_reset_postdata(  );
                                            }
                                        } ?>

                                    <?php 
                                        // Second Loop
                                        // Creating WP_Query object with custom loop
                                        $secondary = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 2,
                                            'category__not_in' => array(5),
                                            'category__in' => array(3,6),
                                            'offset' => 1,
                                        ));

                                        if( $secondary->have_posts(  )){
                                            while($secondary->have_posts(  )) {
                                                $secondary->the_post(  );
                                            ?>
                                            <!-- Using the loop data with a called template -->
                                            <div class="col-sm-6">
                                                <?php get_template_part( 'template-parts/content', 'secondary' ); ?>
                                            </div>

                                            <?php
                                            // reseting custom loop data
                                                wp_reset_postdata(  );
                                            }
                                        } ?>
                                    
                                </div>
                            </div>
                            <!-- End of Mainloop -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php get_footer() ?>
