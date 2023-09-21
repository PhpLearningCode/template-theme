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
    <div class="content-area">
        <main>
            <section class="carrousel"></section>
            <section class="middle-area">
                <aside class="sidebar"></aside>
                <div class="news"></div>
            </section>
            <section class="map"></section>
        </main>
    </div>
    <footer>
        <?php wp_footer(); ?>
        <div class="copyright"></div>
        <div class="social-media"></div>
    </footer>
</body>
</html>