<?php

/**
 * Template Name: home
 */

get_header();

?>
<div class="home">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("forside_overskrift"); ?></h2>
        <p><?php the_field("forside_brodtekst"); ?></p>
        <p><?php the_field("forside_brodtekst2"); ?></p>
        <br>
        <p><?php the_field("forside_brodtekst3"); ?></p>
        <p><?php the_field("forside_brodtekst4"); ?></p>
        <br>
        <p><?php the_field("forside_brodtekst5"); ?></p>
        <p><?php the_field("forside_brodtekst6"); ?></p>

    <?php endwhile; // end of the loop. 
    ?>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>