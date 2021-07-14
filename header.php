<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>

<body <?php body_class()?> >

<header class="sticky-top">
    <div id="nav_menu">
        <img
            alt="" 
            src="<?php header_image(); ?>" 
            width="<?php echo get_custom_header()->width; ?>" 
            height="<?php echo get_custom_header()->height; ?>"
        />
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation',
            )
        );?>
    </div>
</header>