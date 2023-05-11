<?php

/**
 * Template Name: about
 */

get_header();

?>

<?php while (have_posts()) : the_post(); ?>
    <div class="Mal">
        <h2><?php the_field("vores_mal"); ?></h2>
    </div>
    <div class="om_os_container">
        <div class="om_os_row">
            <div class="col-md-4">
                <h3> <?php the_field("tryghed_overskrift") ?></h3>
                <p><?php the_field("tryghed_tekst") ?></p>
            </div>


            <div class="col-md-4">
                <h3><?php the_field("abenhed_overskrift") ?></h3>
                <p><?php the_field("abenhed_tekst") ?></p>
            </div>

            <div class="col-md-4">
                <h3><?php the_field("mal_overskrift") ?></h3>
                <p><?php the_field("mal_tekst") ?></p>
            </div>
        </div>
        <div class="om_os_row2">
            <div class="col-md-6">
                <h3><?php the_field("om_os_overskrift") ?></h3>
                <p><?php the_field("om_os_undertitel") ?></p>
                <br>
                <p><?php the_field("om_os_tekst") ?></p>
            </div>
            <div class="col-md-6">
                <img width="100%" src="<?php the_field("om_os_hero") ?>" alt="om os hero">
            </div>
        </div>
        <div class="col-md-12">
            <h3><?php the_field("personale_overskrift") ?></h3>
            <p><?php the_field("personale_tekst") ?></p>
        </div>
    </div>
<?php endwhile; // end of the loop. 
?>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>