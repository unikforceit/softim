<?php
/**
 * Theme Default Archives Template
 *
 * This page is used for all kind of archives from custom post types to blog to 'by date' archives.
 *
 * Types of archives handled:
 *
 *  - Categories
 *  - Tags
 *  - Taxonomies
 *  - Author Archives
 *  - Date Archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */


get_header();
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Team
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="team-section three ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="team-item details">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="team-thumb">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php } ?>
                        <div class="team-content-area">
                            <div class="team-content">
                                <h3 class="title"><?php the_title(); ?></h3>
                                <span class="sub-title">Chief Customer Officer</span>
                                <div class="team-social-area">
                                    <ul class="team-social">
                                        <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <p><?php the_content(); ?></p>
                                <p><?php the_content(); ?></p>
                                <div class="team-signature">
                                    <img src="assets/images/element/element-75.png" alt="element">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-tab-area">
                <div class="team-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="education-tab" data-toggle="tab"
                                    data-target="#education" type="button" role="tab" aria-controls="education"
                                    aria-selected="true">Education
                            </button>
                            <button class="nav-link" id="experience-tab" data-toggle="tab" data-target="#experience"
                                    type="button" role="tab" aria-controls="experience" aria-selected="false">Experience
                            </button>
                            <button class="nav-link" id="skills-tab" data-toggle="tab" data-target="#skills"
                                    type="button" role="tab" aria-controls="skills" aria-selected="false">Work Skills
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="education" role="tabpanel"
                             aria-labelledby="education-tab">
                            <div class="team-overview">
                                <div class="team-overview-content">
                                    <h4 class="title">Aliquam suscipit sodales egestas. Vivamus vestibulum metus a
                                        sapien congue semper.</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                                <div class="team-overview-content">
                                    <h4 class="title">Aliquam suscipit sodales egestas. Vivamus vestibulum metus a
                                        sapien.</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                                <div class="team-overview-content">
                                    <h4 class="title">Aliquam suscipit sodales egestas. Vivamus vestibulum.</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <div class="team-overview">
                                <div class="team-overview-content">
                                    <h4 class="title">Hic enim architecto sint accusamus, ex maiores ipsum ratione illum
                                        nisi beatae!</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus.</p>
                                </div>
                                <div class="team-overview-content">
                                    <h4 class="title">Iste dolore accusamus enim consequatur, itaque placeat?</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                                <div class="team-overview-content">
                                    <h4 class="title">Eaque accusamus illum impedit quos dolorem, fuga saepe quis maxime
                                        molestias soluta?</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur.Donec eleifend ac
                                        ex lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                            <div class="team-overview">
                                <div class="team-overview-content">
                                    <h4 class="title">Odio debitis obcaecati quod sunt omnis ipsa, ullam incidunt.</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                                <div class="team-overview-content">
                                    <h4 class="title">Placeat, eligendi molestias veritatis ratione accusamus nostrum
                                        laudantium.</h4>
                                    <p>Aliquam suscipit sodales egestas. Vivamus vestibulum metus a sapien congue
                                        semper. Aliquam vestibulum sem leo, et facilisis diam suscipit eu. Integer
                                        viverra mi et nunc fringilla, vel tristique nulla consectetur. Suspendisse leo
                                        nisi, dictum nec sollicitudin sit amet, vehicula a risus. Donec eleifend ac ex
                                        lacinia convallis. Phasellus blandit metus lacus, quis porta ex tincidunt sit
                                        amet. Praesent sed porttitor neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Team
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();