<?php

/**
 * Template Name: about
 */

get_header();

?>

<?php while (have_posts()) : the_post(); ?>

    <h2><?php the_field("vores_mal"); ?></h2>

    <img src="<?php the_field('hero_image'); ?>" />

    <p><?php the_content(); ?></p>

<?php endwhile; // end of the loop. 
?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>