<!DOCTYPE html>
<html <?php get_language_attributes()?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="logo col-xl-3 col-sm-3 col-3">Logo</div>
                    <nav class="menu-area col-xl-6 col-sm-7 col-6 text-center">
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