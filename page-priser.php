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
                <div class="col-md-12 rabat">
                    <h2><?php the_field("rabat_overskrift"); ?></h2>
                    <p><?php the_field("rabat_tekst"); ?></p>
                </div>

                <div class="col-md-12">
                    <h4><?php the_field("pr_1_1_2022") ?></h4>
                </div>
                <br>
                <section class="section-prices">
                    <h2 class="section-header"></h2>
                    <div class="list-boxs">
                        <div class="card starter">
                            <div class="head">
                                Fyldning, 2 flader
                                i lille kindtand(præmolar)
                            </div>
                            <div class="ticket">845,00 - 1.100,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card standard">
                            <div class="head">
                                Fyldning, 2 flader i
                                stor kindtand i
                                underkæbe (molar)
                            </div>
                            <div class="ticket">1.270,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card premium">
                            <div class="head">
                                Fyldning, 3 flader i
                                lille kindtand (præmolar) </div>
                            <div class="ticket">1.270,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <br>
                        <div class="card starter">
                            <div class="head">
                                Fyldning, 3 flader i
                                stor kindtand i
                                underkæbe (molar)
                            </div>
                            <div class="ticket">1.420,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card standard">
                            <div class="head">
                                Fyldning, 4 flader i
                                lille kindtand (præmolar)
                            </div>
                            <div class="ticket">1.250,00-1.480,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card premium">
                            <div class="head">
                                Fyldning, 4 flader i
                                stor kindtand i
                                underkæbe(molar) </div>
                            <div class="ticket">1.305,00-1.480,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card standard">
                            <div class="head">
                                Fyldning, 5 flader i
                                lille kindtand (præmolar)
                            </div>
                            <div class="ticket">1.360,00-1.530,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                        <div class="card premium">
                            <div class="head">
                                Fyldning, 5 flader i
                                stor kindtand i
                                underkæbe(molar)</div>
                            <div class="ticket">1.360,00-1.560,00</div>
                            <div class="body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <button class="btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; // end of the loop. 
            ?>
            </div>
        </div>
</div>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>