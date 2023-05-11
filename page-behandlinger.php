<?php

/**
 * Template Name: behandlinger
 */

get_header();

?>
<div class="behandlinger">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("behandlinger_overskrift"); ?></h2>

    <?php endwhile; // end of the loop. 
    ?>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>