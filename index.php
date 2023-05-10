<?php get_header() ?>

<body>

    <?php while (have_posts()) : the_post() ?>
        <h2><?php the_field("forside_overskrift"); ?></h2>
        <p><?php the_field("forside_brodtekst"); ?></p>
        </div>

    <?php endwhile ?>
    <?php get_footer(); ?>
</body>

</html>