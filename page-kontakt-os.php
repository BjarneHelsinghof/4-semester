<?php

/**
 * Template Name: kontakt-os
 */

get_header();

?>
<div class="kontakt-os">
    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_field("kontakt_overskrift"); ?></h2>

        <img class="img-fouild rounded w-35 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/header.png" alt="telefon">
        <h3><?php the_field("telefon_tid_overskrift"); ?></h3>
        <p><?php the_field("telefon_tid_tekst"); ?></p>
        <p><?php the_field("telefon_tid_tekst2"); ?></p>

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