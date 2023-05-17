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
        <div class="row">
            <div class="col-sm">
                <h3> <?php the_field("tryghed_overskrift") ?></h3>
                <p><?php the_field("tryghed_tekst") ?></p>
            </div>
            <div class="col-sm">
                <h3><?php the_field("abenhed_overskrift") ?></h3>
                <p><?php the_field("abenhed_tekst") ?></p>
            </div>
            <div class="col-sm">
                <h3><?php the_field("mal_overskrift") ?></h3>
                <p><?php the_field("mal_tekst") ?></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h3><?php the_field("om_os_overskrift") ?></h3>
                <br>
                <p><?php the_field("om_os_undertitel") ?></p>
                <br>
                <p><?php the_field("om_os_tekst") ?></p>
                <br>
                <p><?php the_field("om_os_tekst2") ?></p>
            </div>
            <div class="col-md-6">
                <img class="img-flurid w-100 h-55" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/ugeavisen.jpg" alt="om os">
            </div>
        </div>
        <br>
        <div class="personale col-md">
            <h3><?php the_field("personale_overskrift") ?></h3>
            <p><?php the_field("personale_tekst") ?></p>
        </div>
        <br>
        <section id="team">
            <div class="row">
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Jan.jpg" alt="Jan">
                            <h3>Jan Kissow Petersen</h3>
                            <h5>Tandlæge</h5>
                            <p>Århus Tandlægehøjskole 1988, klinikejer siden 2000..</p>
                            <div class="d-flex flex-row justify-content-center">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Niels.jpg" alt="Niels">
                            <h3>Niels Chr. Skalkhøj </h3>
                            <h5>Tandlæge</h5>
                            <p>Århus Tandlægehøjskole 1988, ansat her 2005, klinikejer siden 2007</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Trine.jpg" alt="Trine">
                            <h3>Trine Behr Jepsen </h3>
                            <h5>Tandlæge</h5>
                            <p>Århus Tandlægehøjskole 2003, ansat siden 2013.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Lene.jpg" alt="Lene">
                            <h3>Lene Teilmann </h3>
                            <h5>Tandplejer</h5>
                            <p>Århus Tandlægehøjskole 1994, ansat siden 2004.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Birthe.jpg" alt="Birthe">
                            <h3>Birthe Petersen</h3>
                            <h5>Klinikassistent</h5>
                            <p>Uddannet 1989, ansat siden 1987.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Marianne.jpg" alt="Marianne">
                            <h3>Marianne Petersen</h3>
                            <h5>Klinikassistent</h5>
                            <p>Uddannet 1990, ansat siden 2000.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Marianne2.jpg" alt="Marianne">
                            <h3>Marianne Bjerre Rasmussen</h3>
                            <h5>Klinikassistent</h5>
                            <p>Uddannet 1989, ansat siden 2010.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Ida.jpg" alt="Ida">
                            <h3>Ida Bergholt</h3>
                            <h5>Klinikassistent</h5>
                            <p>Uddannet 2013, ansat siden 2011.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3" src="http://kissow-skalhoj.local/wp-content/uploads/2023/05/Chalotte.jpg" alt="Charlotte">
                            <h3>Chalotte</h3>
                            <h5>Elev</h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
<?php endwhile; // end of the loop. 
?>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>