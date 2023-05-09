<?php get_header() ?>

<body>

    <?php while (have_posts()) : the_post() ?>
        <div class="forside row">
            <div class="col-12 col-sm-6 "><?php the_field("forside_overskrift") ?></div>
            <div class="col-12 col-sm-6 "><?php the_field("forside_brodtekst") ?></div>
        </div>

    <?php endwhile ?>

    <?php get_footer(); ?>
</body>