<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

$softim = softim();
$post_meta = get_post_meta(get_the_ID(), 'softim_post_gallery_options', true);
$post_meta_gallery = isset($post_meta['gallery_images']) && !empty($post_meta['gallery_images']) ? $post_meta['gallery_images'] : '';
$post_single_meta = Softim_Group_Fields_Value::post_meta('blog_single_post');
?>
<div class="blog-item details">
    <?php if (has_post_thumbnail()) { ?>
        <div class="blog-thumb">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php } ?>
    <div class="blog-content">
        <div class="blog-post-meta">
            <span class="user"><?php esc_html('By :'); ?><?php the_author(); ?></span>
            <span class="category two"><?php the_date('F j, Y'); ?></span>
        </div>
        <h3 class="title"><?php the_title();?></h3>
        <div class="blog-content"><?php the_content();?></div>
        <div class="blog-tag-wrapper">
            <span>Tags:</span>
            <ul class="blog-footer-tag">
                <li><a href="#0">Drivers</a></li>
                <li><a href="#0">Event</a></li>
            </ul>
        </div>
        <nav>
            <ul class="pagination two">
                <li class="page-item prev">
                    <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;"><i class="fa fa-chevron-left"></i></a>
                </li>
                <li class="page-item tags"><a class="page-link" href="blog.html"><i class="icon-Tags_menu"></i></a></li>
                <li class="page-item next">
                    <a class="page-link" href="#" rel="next" aria-label="Next &raquo;"><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
        <div class="blog-related-area">
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-section-header">
                        <div class="section-header">
                            <h3 class="section-title">Top Related Post</h3>
                        </div>
                        <div class="slider-nav-area">
                            <div class="slider-prev">
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="blog-slider-area">
                        <div class="blog-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="assets/images/blog/blog-8.png" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-post-meta">
                                                <span class="user">By : Smith Roy</span>
                                                <span class="category two"> 24th March, 2021</span>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html">Many important brands have
                                                    given us their trust</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="assets/images/blog/blog-11.png" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-post-meta">
                                                <span class="user">By : Smith Roy</span>
                                                <span class="category two"> 24th March, 2021</span>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html">Many important brands have
                                                    given us their trust</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>