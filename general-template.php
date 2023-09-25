<?php 
/*
Template Name: General Template
*/
?>

<?php get_header() ?>
    <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header-image" />
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="general-template">
                        <!-- First part of Mainloop -->
                        <?php 
                            if (have_posts(  )){
                                while( have_posts(  )){
                                    the_post(  );
                                    ?>
                        <!-- Using the retrieved data of Mainloop at the Wordpress Site -->
                                    <article>
                                        <h2><?php the_title( ); ?></h2>
                                        <?php the_content( ); ?>
                                    </article>
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
            </section>
        </main>
    </div>
    <?php get_footer() ?>
