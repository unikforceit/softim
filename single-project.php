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
    Start Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="gallery-item details">
                        <?php if (has_post_thumbnail()){?>
                            <div class="gallery-thumb">
                                <?php the_post_thumbnail('full');?>
                            </div>
                        <?php } ?>
                        <div class="gallery-content-area">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-8 col-lg-8 mb-30">
                                    <div class="gallery-content text-start">
                                        <h3 class="title"><?php the_title();?></h3>
                                        <p><?php the_content();?></p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30">
                                    <div class="gallery-sidebar text-start">
                                        <div class="gallery-sidebar-widget">
                                            <ul class="gallery-sidebar-widget-list">
                                                <li>
                                                    <h5 class="title">Client</h5>
                                                    <span class="sub-title">ThemeIM Marketing Agency</span>
                                                </li>
                                                <li>
                                                    <h5 class="title">Date</h5>
                                                    <span class="sub-title">February 25, 2022</span>
                                                </li>
                                                <li>
                                                    <h5 class="title">Service</h5>
                                                    <span class="sub-title">Mobile App & Website Develop</span>
                                                </li>
                                                <li>
                                                    <h5 class="title">Web</h5>
                                                    <span class="sub-title">www.clientweb.com</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();