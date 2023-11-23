<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container-fluid ">
                <div class="row align-items-center">
                    <div class="logo col-xl-4 col-sm-4 col-3">
                        <?php the_custom_logo( ); ?>
                    </div>
                    <nav class="menu-area col-xl-5 col-sm-6 col-6">
                        <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu',
                            )
                        ) 
                        ?>
                    </nav>
                    <div class="search-box col-xl-3 col-sm-2 col-3 text-end"><?php get_search_form( ); ?></div>
                </div>
            </div>
            
        </section>
    </header>