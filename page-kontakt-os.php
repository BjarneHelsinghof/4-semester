<?php

/**
 * Template Name: kontakt-os
 */

get_header();

?>
<div class="kontakt-os">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("kontakt_overskrift"); ?></h2>

        <p><?php the_field("ring_til_os_tekst"); ?></p>

        <p><?php the_field("email_tekst"); ?></p>

        <h3><?php the_field("tandpine_overskrift"); ?></h3>

        <p><?php the_field("tandpine_tekst"); ?></p>


        <h3><?php the_field("telefon_overskrift"); ?></h3>

        <p><?php the_field("telefon_tekst"); ?></p>
    <?php endwhile; // end of the loop. 
    ?>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>