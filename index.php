<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">

        <?php wp_head(); ?>
    </head>
    <body>
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>

        <?php
        if( have_posts() ) :
            while( have_posts() ):
                the_post();
                ?>

                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_content(); ?>
                </div>
        
                <?php
            endwhile;
        endif;
        ?>
        

        <?php wp_footer(); ?>
    </body>
</html>

