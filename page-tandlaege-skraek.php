<?php

/**
 * Template Name: tandlaege-skraek
 */
get_header();

?>
<div class="tandlægeskræk col-md-12">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("tandlaegeskraek_overskrift"); ?></h2>
        <br>
        <img id="tandlaegeskraek_hero" width="20%" src="<?php the_field("tandlaegeskraek_hero") ?>" alt="tandlægeskræk hero">
        <p><?php the_field("tandlaegeskraek_brodtekst"); ?></p>
        <p><?php the_field("tandlaegeskraek_brodtekst2"); ?></p>
        <p><?php the_field("tandlaegeskraek_brodtekst3"); ?></p>
        <br>
        <p><?php the_field("tandlaegeskraek_brodtekst4"); ?></p>
        <p><?php the_field("tandlaegeskraek_brodtekst5"); ?></p>
        <p><?php the_field("tandlaegeskraek_brodtekst6"); ?></p>
        <p><?php the_field("tandlaegeskraek_brodtekst7"); ?></p>
        <h2><?php the_field("hvor_mange_har_tandlaege_skraek_overskrift"); ?></h2>
        <p><?php the_field("hvor_mange_har_tandlaege_skraek_brodtekst"); ?></p>
        <p><?php the_field("hvor_mange_har_tandlaege_skraek_brodtekst2"); ?></p>
        <p><?php the_field("hvor_mange_har_tandlaege_skraek_brodtekst3"); ?></p>
        <h2><?php the_field("5_gode_rad_mod_tandlaege_skraek_overskrift"); ?></h2>
        <p><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst"); ?></p>
        <br>
        <p><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst2"); ?></p>
        <br>
        <p><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst3"); ?></p>
        <br>
        <p><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst4"); ?></p>
        <br>
        <p><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst5"); ?></p>

    <?php endwhile; // end of the loop. 
    ?>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>