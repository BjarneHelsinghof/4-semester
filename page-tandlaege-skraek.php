<?php

/**
 * Template Name: tandlaege-skraek
 */

get_header();

?>
<div class="tandlægeskræk">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("tandlaegeskraek_overskrift"); ?></h2>
        <b>
            <h3><?php the_field("tandlaegeskraek_brodtekst"); ?></h3>
            <b>
                <h3><?php the_field("tandlaegeskraek_brodtekst2"); ?></h3>
                <b>
                    <h3><?php the_field("tandlaegeskraek_brodtekst3"); ?></h3>
                    <b>
                        <h3><?php the_field("tandlaegeskraek_brodtekst4"); ?></h3>
                        <b>
                            <h3><?php the_field("tandlaegeskraek_brodtekst5"); ?></h3>
                            <b>
                                <h3><?php the_field("tandlaegeskraek_brodtekst6"); ?></h3>
                                <b>
                                    <h3><?php the_field("tandlaegeskraek_brodtekst7"); ?></h3>
                                    <b>
                                        <h3><?php the_field("tandlaegeskraek_brodtekst8"); ?></h3>
                                        <b>
                                            <h2><?php the_field("hvor_mange_har_tandlaege_skraek_overskrift"); ?></h2>
                                            <b>
                                                <h3><?php the_field("hvor_mange_har_tandlaege_skraek_brodtekst"); ?></h3>
                                                <h2><?php the_field("5_gode_rad_mod_tandlaege_skraek_overskrift"); ?></h2>
                                                <h3><?php the_field("5_gode_rad_mod_tandlaege_skraek_brodtekst"); ?></h3>

                                            <?php endwhile; // end of the loop. 
                                            ?>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>