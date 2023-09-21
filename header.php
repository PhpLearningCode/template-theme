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
            <div class="logo"></div>
            <div class="menu-area"></div>
            <div class="search"></div>
        </section>
    </header>