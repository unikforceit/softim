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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="service-item three details">
                        <?php if (has_post_thumbnail()){?>
                            <div class="service-thumb">
                                <?php the_post_thumbnail('full');?>
                            </div>
                        <?php } ?>
                        <div class="service-content">
                            <h2 class="title"><?php the_title();?></h2>
                            <p><?php the_excerpt();?></p>
                            <div class="service-widget-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="assets/images/icon/icon-17.png" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">CUSTOMIZED STYLE</h5>
                                                <span class="sub-title">Pre Designed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="assets/images/icon/icon-18.png" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">IN TIME RESULT</h5>
                                                <span class="sub-title">Developer Time</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="assets/images/icon/icon-19.png" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">PIXEL PERFECT</h5>
                                                <span class="sub-title">Design Time</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                        <div class="service-widget-item">
                                            <div class="service-widget-icon">
                                                <img src="assets/images/icon/icon-20.png" alt="icon">
                                            </div>
                                            <div class="service-widget-content">
                                                <h5 class="title">SEO FRIENDLY</h5>
                                                <span class="sub-title">Development</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title"><?php echo esc_html('Service Description');?></h2>
                                <p>Pick our website architecture administrations, and your business can depend on 100%
                                    straightforwardness. From our customized statements to our underlying plans, our
                                    group gives your organization complete admittance to our website
                                    Get free, exact, and moment quote for our website architecture and advancement
                                    administrations with our simple to-utilize number cruncher. Our group tailors our
                                    website composition administrations to your organization and its one of a kind
                                    requirements. That is the reason you can redo each component of our administrations
                                    to your organization, items or administrations, and objectives.</p>
                                <p>We expand the aftereffects of your web composition or upgrade plan, just as improve
                                    your advanced advertising methodology, by guaranteeing your site follows best
                                    practices for website streamlining (SEO). Web optimization alludes to an umbrella of
                                    strategies that upgrade your site’s positioning for significant list items. A higher
                                    positioning in list items relates to higher perceivability.</p>
                                <div class="sevice-inner-item-area">
                                    <div class="row justify-content-center mb-30-none">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                            <div class="service-inner-item">
                                                <div class="service-inner-icon">
                                                    <img src="assets/images/icon/icon-14.png" alt="icon">
                                                </div>
                                                <div class="service-inner-content">
                                                    <h4 class="title">Over 1500 DVSA certified Develop web product</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                            <div class="service-inner-item">
                                                <div class="service-inner-icon">
                                                    <img src="assets/images/icon/icon-15.png" alt="icon">
                                                </div>
                                                <div class="service-inner-content">
                                                    <h4 class="title">Free access to our award winning road brain
                                                        stroming</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                            <div class="service-inner-item">
                                                <div class="service-inner-icon">
                                                    <img src="assets/images/icon/icon-16.png" alt="icon">
                                                </div>
                                                <div class="service-inner-content">
                                                    <h4 class="title">Successful Project Delivery System in our
                                                        team</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <blockquote class="two">
                                    <div class="quote-area d-flex flex-wrap">
                                        <div class="quote-icon">
                                            <img src="assets/images/client/quote-2.png" alt="quote">
                                        </div>
                                        <div class="quote-shape">
                                            <img src="assets/images/element/element-66.png" alt="element">
                                        </div>
                                        <div class="quote-content-area">
                                            <p class="quote-content">Web optimization alludes to an umbrella of
                                                strategies that upgrade your site’s positioning for significant list
                                                items. A higher positioning in list items.</p>
                                        </div>
                                    </div>
                                </blockquote>
                                <p>Pick our website architecture administrations, and your business can depend on 100%
                                    straightforwardness. From our customized statements to our underlying plans, our
                                    group gives your organization complete admittance to our website
                                    Get free, exact, and moment quote for our website architecture and advancement
                                    administrations with our simple to-utilize number cruncher. Our group tailors our
                                    website composition administrations to your organization and its one of a kind
                                    requirements. That is the reason you can redo each component of our administrations
                                    to your organization, items or administrations, and objectives.</p>
                                <div class="contact-section two">
                                    <div class="contact-area">
                                        <div class="contact-element-five">
                                            <img src="assets/images/element/element-60.png" alt="element">
                                        </div>
                                        <div class="contact-element-six">
                                            <img src="assets/images/element/element-60.png" alt="element">
                                        </div>
                                        <div class="row mb-30-none">
                                            <div class="col-xl-5 col-lg-5 mb-30">
                                                <div class="contact-thumb">
                                                    <img src="assets/images/contact.png" alt="contact">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 mb-30">
                                                <div class="contact-form-area">
                                                    <div class="contact-form-header">
                                                        <div class="left">
                                                            <h2 class="title">Get in Touch <span class="text--base">Let's Talk</span>
                                                            </h2>
                                                            <p>Credibly grow premier ideas rather than bricks-and-clicks
                                                                strategic theme areas.</p>
                                                        </div>
                                                    </div>
                                                    <form class="contact-form">
                                                        <div class="row justify-content-center mb-30-none">
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <input type="text" class="form--control"
                                                                       placeholder="Your Name">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <input type="email" class="form--control"
                                                                       placeholder="Your Email">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <input type="text" class="form--control"
                                                                       placeholder="Phone Number"
                                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 form-group">
                                                                <div class="contact-select">
                                                                    <select class="form--control">
                                                                        <option value="1">Service Required</option>
                                                                        <option value="2">Web Design</option>
                                                                        <option value="3">Digital Marketing</option>
                                                                        <option value="4">Search SEO</option>
                                                                        <option value="5">Web Development</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 form-group">
                                                                <textarea class="form--control"
                                                                          placeholder="Write Message..."></textarea>
                                                            </div>
                                                            <div class="col-xl-12 form-group custom-form-group mt-20">
                                                                <div class="form-group custom-check-group">
                                                                    <input type="checkbox" id="level-1">
                                                                    <label for="level-1">I'm Agree With Softim <a
                                                                                href="#0" class="text--base">Terms &
                                                                            Conditions</a></label>
                                                                </div>
                                                                <button type="submit" class="btn--base">Send Message
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
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
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();