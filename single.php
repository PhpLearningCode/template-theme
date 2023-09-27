<?php get_header(); ?>
    <div class="primary">
        <div class="main">
            <div class="container">
                <?php 
                    while(have_posts(  )): the_post(  );
                        get_template_part( 'template-parts/content', 'single' );
                        ?>
                        <div class="row">
                            <div class="pages text-start"><?php next_post_link( '&laquo; %link' ); ?></div>
                            <div class="pages text-end"><?php previous_post_link( '%link &raquo;' ); ?></div>
                        </div>
                        <?php 
                        if(comments_open( ) || get_comments_number() ) {
                            comments_template( );
                        }
                    endwhile;
                ?>
            </div>
        </div>
    </div>
<?php get_footer( ); ?>