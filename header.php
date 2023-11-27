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
            <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light menu-area row text-align-center">
                        <div class="logo navbar-brand text-center col-lg-3 col-12">
                            <?php the_custom_logo( ); ?>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse col-lg-6 col-8" id="navbarSupportedContent">
                            <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main_menu',
                                )
                            ) 
                            ?>
                        </div>
                        <div class="search-box col-lg-3 col-12"><?php get_search_form( ); ?></div>
                    </nav>
                </div>            
        </section>
    </header>