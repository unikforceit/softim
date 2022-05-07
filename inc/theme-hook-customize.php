<?php
/**
 * Theme Hooks Customize
 * @package softim
 * @since 1.0.0
 */

if (!defined("ABSPATH")) {
    exit(); //exit if access directly
}

if (!class_exists('Softim_Customize')) {

    class Softim_Customize
    {
        /**
         * $instance
         * @since 1.0.0
        */
        protected static $instance;

        public function __construct()
        {
            //excerpt more
            add_action('excerpt_more', array($this, 'excerpt_more'));
            //preloader
            add_action('softim_after_body', array($this, 'preloader'));
            //breadcrumb
            add_action('softim_before_page_content', array($this, 'breadcrumb'));
            //Header
            add_action('softim_before_page_content', array($this, 'softim_render_header'));
            //Footer
            add_action('softim_after_page_content', array($this, 'softim_render_footer'));
            //back top
            add_action('softim_after_body', array($this, 'back_top'));
            //order comment form
            add_filter('comment_form_fields', array($this, 'comment_fields_reorder'));
            // contact form 7
            add_filter('wpcf7_autop_or_not', '__return_false');
        }

        /**
         * getInstance()
         * @since 1.0.0
        */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        // Render Header
        public function softim_render_header()
        {
            $page_container_meta = Softim_Group_Fields_Value::page_container('softim', 'header_options');
            $header_switch = cs_get_option('elementor_header_builder');
            $header = cs_get_option('elementor_header');
            $option_header = $header_switch == '1' ? $header : '';
            if ($header_switch == '1' && !empty($header)) {
                echo do_shortcode('[RENDER_ELEMENTOR id="' . $option_header . '"]');
            } else{
                get_template_part('template-parts/header/header', $page_container_meta['navbar_type']);
            }
        }
        // Render Footer
        public function softim_render_footer(){
            $footer_switch = cs_get_option('elementor_footer_builder');
            $footer = cs_get_option('elementor_footer');
            $option_footer = $footer_switch == '1' ? $footer : '';
            echo do_shortcode('[RENDER_ELEMENTOR id="'.$option_footer.'"]');
        }

        /**
         * Excerpt More
         * @since 1.0.0
         */
        public function excerpt_more($more)
        {
            $more = cs_get_option('blog_post_excerpt_more');
            return $more;
        }

        /**
         * Breadcrumb
         * @since 1.0.0
         */
        public function breadcrumb()
        {
            $page_id = softim()->page_id();
            $check_page = (!is_home() && !is_front_page() && is_singular()) || is_search() || is_author() || is_404() || is_archive() ? true : false;
            $check_home_page = softim()->is_home_page();
            $page_header_meta = Softim_Group_Fields_Value::page_container('softim', 'header_options');
            $header_variant_class = isset($page_header_meta['navbar_type']) ? 'navbar-' . $page_header_meta['navbar_type'] : 'navbar-default';
            $page_breadcrumb_enable = isset($page_header_meta['page_breadcrumb_enable']) && $page_header_meta['page_breadcrumb_enable'] ? $page_header_meta['page_breadcrumb_enable'] : false;
            $breadcrumb_enable = false;
            $header_variant_class .= !empty(cs_get_option('header_two_top_bar_shortcode')) && $page_header_meta['navbar_type'] == 'style-01' ? ' header-style-02-has-topbar ' : '';

            if (!empty(cs_get_option('header_four_top_bar_shortcode')) && $page_header_meta['navbar_type'] == 'style-03' && !empty(cs_get_option('header_four_top_bar_shortcode'))) {
                $header_variant_class .= ' header-style-04-has-topbar ';
            } elseif (!empty(cs_get_option('header_four_top_bar_shortcode')) && $page_header_meta['navbar_type'] == 'style-03' && empty(cs_get_option('header_four_top_bar_shortcode'))) {
                $header_variant_class .= ' header-style-04-no-topbar ';
            }

            if (!$check_home_page && !$check_page) {
                $breadcrumb_enable = true;
            } elseif (!$page_breadcrumb_enable && $check_page) {
                $breadcrumb_enable = true;
            }
            $breadcrumb_enable = !cs_get_switcher_option('breadcrumb_enable') ? false : $breadcrumb_enable;

            if (!$breadcrumb_enable) {
                return;
            }

            ?>
           <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <section class="banner-section two inner">
                <?php  $breadcrumb_elements_1 = cs_get_option('breadcrumb_elements_1');?>
                <?php  $breadcrumb_elements_2 = cs_get_option('breadcrumb_elements_2');?>
                <?php  $breadcrumb_elements_3 = cs_get_option('breadcrumb_elements_3');?>
                <?php  $breadcrumb_elements_4 = cs_get_option('breadcrumb_elements_4');?>
                <?php  $breadcrumb_elements_5 = cs_get_option('breadcrumb_elements_5');?>
                <?php if (!empty($breadcrumb_elements_1['id'])){?>
                    <div class="banner-element-four two">
                        <?php echo wp_get_attachment_image($breadcrumb_elements_1['id'], 'full')?>
                    </div>
                <?php } ?>
                <?php if (!empty($breadcrumb_elements_2['id'])){?>
                    <div class="banner-element-five two">
                        <?php echo wp_get_attachment_image($breadcrumb_elements_2['id'], 'full')?>
                    </div>
                <?php } ?>
                <?php if (!empty($breadcrumb_elements_3['id'])){?>
                    <div class="banner-element-nineteen two">
                        <?php echo wp_get_attachment_image($breadcrumb_elements_3['id'], 'full')?>
                    </div>
                <?php } ?>
                <?php if (!empty($breadcrumb_elements_4['id'])){?>
                    <div class="banner-element-twenty-two two">
                        <?php echo wp_get_attachment_image($breadcrumb_elements_4['id'], 'full')?>
                    </div>
                <?php } ?>
                <?php if (!empty($breadcrumb_elements_5['id'])){?>
                    <div class="banner-element-twenty-three two">
                        <?php echo wp_get_attachment_image($breadcrumb_elements_5['id'], 'full')?>
                    </div>
                <?php } ?>
                <div class="container">
                    <div class="row justify-content-center align-items-center mb-30-none">
                        <div class="col-xl-12 mb-30">
                            <div class="banner-content two">
                                <div class="banner-content-header">
                                    <?php
                                    if (is_archive()) {
                                        the_archive_title('<h2 class="title">', '</h2>');
                                    } elseif (is_404()) {
                                        printf('<h2 class="title">%1$s</h2>', esc_html__('Error 404', 'softim'));
                                    } elseif (is_search()) {
                                        printf('<h2 class="title">%1$s %2$s</h2>', esc_html__('Search Results for:', 'softim'), get_search_query());
                                    } elseif (is_singular('post')) {
                                        printf('<h2 class="title">%1$s </h2>', get_the_title());
                                    }elseif (is_singular('service')) {
                                        printf('<h2 class="title">%1$s </h2>', get_the_title());
                                    } elseif (is_singular('page')) {
                                        if ($page_header_meta['page_title']) {
                                            printf('<h2 class="title">%1$s </h2>', get_the_title());
                                        }
                                    } else {
                                        printf('<h2 class="title">%1$s </h2>', get_the_title($page_id));
                                    } ?>
                                    <div class="breadcrumb-area">
                                        <nav aria-label="breadcrumb">
                                            <?php
                                            if ($page_header_meta['page_breadcrumb']) {
                                                softim_breadcrumb();
                                            }
                                            ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                End Banner
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <?php
        }

        /**
         * Preloader
         * @since 1.0.0
         */
        public function preloader()
        {
            $preloader_enable = cs_get_switcher_option('preloader_enable');
            if (!$preloader_enable) {
                return;
            }
            ?>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Start Preloader
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="preloader">
                <div class="drawing" id="loading">
                    <div class="loading-dot"></div>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                End Preloader
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


            <div class="cursor"></div>
            <div class="cursor-follower"></div>

            <?php
        }

        /**
         * Back top
         * @since 1.0.0
         */
        public function back_top()
        {
            $back_top_enable = cs_get_switcher_option('back_top_enable');
            $back_top_icon = cs_get_option('back_top_icon') ? cs_get_option('back_top_icon') : 'fas fa-angle-up';
            if (!$back_top_enable) {
                return;
            }
            ?>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                End Scroll-To-Top
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <?php
        }

        /**
         * Reorder comments form
         * @since 1.0.0
         */
        public function comment_fields_reorder($fileds)
        {
            $comment_filed = $fileds['comment'];
            unset($fileds['comment']);
            $fileds['comment'] = $comment_filed;

            if (isset($fileds['cookies'])) {
                $comment_cookies = $fileds['cookies'];
                unset($fileds['cookies']);
                $fileds['cookies'] = $comment_cookies;
            }

            return $fileds;
        }


    }//end class
    if (class_exists('Softim_Customize')) {
        Softim_Customize::getInstance();
    }
}
