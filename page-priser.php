<?php

/**
 * Template Name: priser
 */

get_header();

?>
<div class="priser">
    <?php while (have_posts()) : the_post(); ?>
        <div class="priser_container">
            <div class="priser_row">
                <div class="col-md-12">
                    <h2><?php the_field("rabat_overskrift"); ?></h2>
                    <p><?php the_field("rabat_tekst"); ?></p>
                </div>

                <div class="col-md-12">
                    <h4><?php the_field("pr_1_1_2022") ?></h4>
                </div>
                <br>
            <?php endwhile; // end of the loop. 
            ?>
            </div>
        </div>
</div>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>