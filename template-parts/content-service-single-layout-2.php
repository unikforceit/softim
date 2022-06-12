<?php
    $service_meta = get_post_meta(get_the_ID(), 'softim_service_options', true);
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="container">
        <div class="row justify-content-center flex-row-reverse mb-30-none">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="service-item three details">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="service-thumb">
                            <?php the_post_thumbnail('full');?>
                        </div>
                    <?php } ?>
                    <div class="service-content two">
                        <h2 class="title"><?php the_title();?></h2>
                        <p><?php the_excerpt();?></p>
                        <div class="service-widget-item-area two">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-30">
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
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-30">
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
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-30">
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
                            </div>
                        </div>
                        <div class="service-bottom-content two">
                            <h2 class="title">Service Description</h2>
                            <p><?php the_content();?></p>
                            <div class="sevice-inner-item-area two">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <div class="service-inner-item">
                                            <div class="service-inner-icon">
                                                <img src="assets/images/icon/icon-14.png" alt="icon">
                                            </div>
                                            <div class="service-inner-content">
                                                <h4 class="title">Over 1500 DVSA certified Develop web product</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
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
                                    <div class="quote-content-area">
                                        <p class="quote-content">Web optimization alludes to an umbrella of
                                            strategies that upgrade your site’s positioning for significant list
                                            items. A higher positioning in list items.</p>
                                    </div>
                                </div>
                            </blockquote>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mb-30">
                <div class="service-sidebar">
                    <div class="category-widget-box mb-30">
                        <ul class="category-list two">
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Digital Marketing</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Search SEO</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Web Development</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> IT Management</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Data Security</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i> QA & Testing</a></li>
                        </ul>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Download</h4>
                        <div class="download-widget-btn">
                            <a href="#0" class="btn--base"><span>Download Our Brochures</span> <i
                                        class="fas fa-download ml-2"></i></a>
                            <a href="#0" class="btn--base"><span>Our Company Details</span> <i
                                        class="fas fa-file-download ml-2"></i></a>
                        </div>
                    </div>
                    <div class="widget-box section--bg mb-30">
                        <h4 class="widget-title text-white">Get In Touch</h4>
                        <p class="text-white">For more information feel free please contact with us.</p>
                        <div class="contact-sidebar-box">
                            <form class="contact-sidebar-form mb-20-none">
                                <div class="form-group">
                                    <input type="text" class="form--control" name="name" placeholder="Name"
                                           required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form--control" name="email"
                                           placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form--control" name="phone"
                                           placeholder="Phone"
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn--base"></i>Request a quotes</button>
                                </div>
                            </form>
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