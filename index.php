<?php get_header() ?>

<body>
    <header>
        <div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/header.png" alt="logo" style="width: auto; height: auto;"></a></div>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
    </header>
    <?php while (have_posts()) : the_post() ?>
        <div class="main">
            <div class="forside1 row">
                <div class="col-12 col-sm-6 "><?php the_field("forside_overskrift") ?></div>
                <div class="col-12 col-sm-6 "><?php the_field("forside_brodtekst") ?></div>
            </div>
        </div>

    <?php endwhile ?>

    <?php get_footer(); ?>
</body>