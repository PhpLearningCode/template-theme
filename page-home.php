<?php get_header() ?>
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
                        <?php get_sidebar( 'home' ); ?>
                        <div class="news col-md-8">
                            <!-- First part of Mainloop -->
                            <?php 
                                if (have_posts(  )){
                                    while( have_posts(  )){
                                        the_post(  );
                                        ?>
                            <!-- Using the retrieved data of Mainloop at the Wordpress Site -->
                                       <p>Arquivo Home.php</p>
                            <!-- Opening php tag again to finish the loop with an else, showing a p if there are no posts -->                    
                                        <?php 
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
