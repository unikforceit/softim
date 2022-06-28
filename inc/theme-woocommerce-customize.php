<?php

/**
 * Package Softim
 * Author ThemeIM
 * @since 1.0.1
 * */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
if (!class_exists('Softim_Woocomerce_Customize')) {
    class Softim_Woocomerce_Customize
    {
        //$instance variable
        private static $instance;

        public function __construct()
        {
            //remove woocommerce action
            remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
            remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
            remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
            remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 10);
            remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
            remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


            //add filter for woocomerce page
            add_filter('woocommerce_post_class', array($this, 'wc_product_post_class'), 20, 3);
            add_filter('woocommerce_show_page_title', '__return_false');
            add_filter('woocommerce_enqueue_styles', '__return_false');

            //add action for woocommerce layout
            add_filter('woocommerce_add_to_cart_fragments', array($this, 'woocommerce_header_add_to_cart_fragment'));
            add_action('woocommerce_before_shop_loop', array($this, 'woocommerce_before_shop_header_wrap_start'), 12);
            add_action('woocommerce_before_shop_loop', array($this, 'woocommerce_before_shop_header_wrap_end'), 32);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_before_shop_loop_item_thumbnail_wrap_start'), 9);
            add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 9);
            add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_before_shop_loop_item_ul_start'), 11);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_before_shop_loop_item_li_add_to_cart'), 11);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_before_shop_loop_item_li_quick_view'), 11);
            add_action('woocommerce_template_single_add_to_cart', array($this, 'woocommerce_single_quick_view'), 30);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_before_shop_loop_item_thumbnail_wrap_end'), 12);
            add_action('woocommerce_before_shop_loop_item_title', array($this, 'woocommerce_shop_loop_item_content_wrap_start'), 14);
            add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 15);
            add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 6);
            add_action('woocommerce_after_shop_loop_item', array($this, 'woocommerce_shop_loop_item_content_wrap_end'), 12);
            add_action('woocommerce_before_single_product_summary', array($this, 'woocommerce_before_single_product_summary_wrapper_start'), 9);
            add_action('woocommerce_before_single_product_summary', array($this, 'woocommerce_before_single_product_thumbnail_wrapper_end'), 22);
            add_action('woocommerce_after_single_product_summary', array($this, 'woocommerce_before_single_product_summary_wrapper_end'), 9);
            add_action('woocommerce_before_account_navigation', array($this, 'woocommerce_before_account_navigation_wrapper_start'), 10);
            add_action('woocommerce_account_content', array($this, 'woocommerce_before_account_navigation_wrapper_end'), 30);
            add_filter('loop_shop_columns', [$this, 'softim_loop_columns'], 999);
            add_filter('loop_shop_per_page', [$this, 'softim_loop_shop_per_page'], 30);
            add_action('wp_footer', [$this, 'softim_quanity_script']);
            add_action('woocommerce_single_product_summary', [$this, 'softim_before_title'], 4);
            add_action( 'woocommerce_after_add_to_cart_button', [$this, 'softim_yith_wcwl_add_to_wishlist'], 10 );

        }


        /**
         * get Instance
         * @since 1.0.2
         * */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function softim_loop_columns()
        {
            return 4; // 4 products per row
        }

        public function softim_loop_shop_per_page($products)
        {
            $products = 8;
            return $products;
        }

        public function softim_before_title()
        {
            global $product;
            ?>
            <span class="stock"><?php echo wp_kses_post($product->get_stock_status()); ?></span>
            <?php
        }

        /**
         * Show cart contents / total Ajax
         * @since 1.0.2
         */
        function woocommerce_header_add_to_cart_fragment($fragments)
        {
            global $woocommerce;
            ob_start();
            ?>
            <a class="softim-header-cart" href="<?php echo wc_get_cart_url(); ?>"
               title="<?php esc_attr_e('View your shopping cart', 'softim'); ?>">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <span class="cart-badge"><?php echo sprintf('%d', WC()->cart->get_cart_contents_count()); ?></span>
            </a>
            <?php
            $fragments['a.softim-header-cart'] = ob_get_clean();
            return $fragments;
        }

        /**
         * shop header wrap start
         * @since 1.0.2
         * */
    public function woocommerce_before_shop_header_wrap_start()
    {
        ?>
        <div class="woocommerce-header-area-wrap">
            <?php
            }
            /**
             * shop header wrap end
             * @since 1.0.2
             * */
            public function woocommerce_before_shop_header_wrap_end(){
            ?>
        </div>
        <?php
    }
        /**
         * product class for archive and single page
         * @since 1.0.2
         * */
        public function wc_product_post_class($class)
        {
            $class[] = is_product() ? 'softim-product-single-page-item' : 'softim-single-product-item';
            return $class;
        }

        /**
         * add wrapper for thumbnail and sale attribute start
         * @sinsce 1.0.0
         * */
    public function woocommerce_before_shop_loop_item_thumbnail_wrap_start()
    {
        ?>
        <div class="woocommerce-thumbnail-wrap">
            <?php
            }

            /**
             * add ul after thumbnail wrap start
             * @sinsce 1.0.0
             * */
            public function woocommerce_before_shop_loop_item_ul_start(){
            ?>
            <ul class="softim-thumb-inner-item-list">
                <?php
                }

                /**
                 * add ul after thumbnail wrap start
                 * @sinsce 1.0.0
                 * */
                public function woocommerce_before_shop_loop_item_li_add_to_cart()
                {
                    ?>
                    <li>
                        <?php
                        $args = ['quantity', 'class', 'attributes', 'icon' => '<i class="fas fa-shopping-cart"></i>'];
                        global $product;
                        echo apply_filters(
                            'softim_woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                            sprintf(
                                '<a href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s" %s>%s</a>',
                                esc_url($product->add_to_cart_url()),
                                esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
                                $product->get_id(),
                                $product->get_sku(),
                                esc_attr(isset($args['class']) ? $args['class'] : 'button add_to_cart_button ajax_add_to_cart'),
                                isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
                                wp_kses($args['icon'], softim()->kses_allowed_html('all'))
                            ),
                            $product,
                            $args
                        );
                        ?>
                    </li>
                    <?php
                }

                /**
                 * add ul after thumbnail wrap start
                 * @sinsce 1.0.0
                 * */
                public function woocommerce_before_shop_loop_item_li_quick_view()
                {
                    ?>
                    <li>
                        <?php
                        if (class_exists('YITH_WCWL')) :
                            global $product;
                            ?>
                            <a href="<?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ? esc_url(YITH_WCWL()->get_wishlist_url()) : esc_url(add_query_arg('add_to_wishlist', $product->get_id())); ?>"
                               data-product-id="<?php echo esc_attr($product->get_id()); ?>"
                               data-product-type="<?php echo esc_attr($product->get_type()); ?>"
                               data-wishlist-url="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>"
                               data-browse-wishlist-text="<?php echo esc_attr(get_option('yith_wcwl_browse_wishlist_text')); ?>"
                               class="button softim_product_wishlist_button <?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ? 'clicked added' : 'add_to_wishlist'; ?>"
                               rel="nofollow" data-toggle="tooltip">
                            <span class="action-text">
                            <?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ?
                                esc_attr(get_option('yith_wcwl_browse_wishlist_text')) :
                                esc_attr('wishlist');
                            ?>
                            </span>
                                <span class="icon"><i class="fa fa-heart"></i></span>
                            </a>
                        <?php
                        endif;
                        ?>
                    </li>
                    <?php
                }

                public function woocommerce_single_quick_view()
                {
                        if (class_exists('YITH_WCWL')) :
                            global $product;
                            ?>
                            <div class="add-to-wishlist">
                                <a href="<?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ? esc_url(YITH_WCWL()->get_wishlist_url()) : esc_url(add_query_arg('add_to_wishlist', $product->get_id())); ?>"
                                   data-product-id="<?php echo esc_attr($product->get_id()); ?>"
                                   data-product-type="<?php echo esc_attr($product->get_type()); ?>"
                                   data-wishlist-url="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>"
                                   data-browse-wishlist-text="<?php echo esc_attr(get_option('yith_wcwl_browse_wishlist_text')); ?>"
                                   class="button softim_product_single_wishlist_button <?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ? 'clicked added' : 'add_to_wishlist'; ?>"
                                   rel="nofollow" data-toggle="tooltip">
                            <span class="action-text">
                            <?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id()) ?
                                esc_attr(get_option('yith_wcwl_browse_wishlist_text')) :
                                esc_attr('wishlist');
                            ?>
                            </span>
                                    <span class="icon"><i class="fa fa-heart"></i></span>
                                </a>
                            </div>
                        <?php
                        endif;

                }

                public function softim_yith_wcwl_add_to_wishlist(){
                    echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                }

                /**
                 * add ul after thumbnail wrap end
                 * @sinsce 1.0.2
                 * */
                public function woocommerce_before_shop_loop_item_ul_end(){
                ?>
            </ul>
        <?php
        }

        /**
         * add wrapper for thumbnail and sale attribute end
         * @sinsce 1.0.2
         * */
        public function woocommerce_before_shop_loop_item_thumbnail_wrap_end(){
        ?>
        </div>
        <?php
    }

        /**
         * add wrapper for title, price and add to cart item
         * @sinsce 1.0.2
         * */
    public function woocommerce_shop_loop_item_content_wrap_start()
    {
        ?>
        <div class="product-content-wrap">
            <?php
            }

            /**
             * add wrapper for title, price and add to cart item
             * @sinsce 1.0.2
             * */
            public function woocommerce_shop_loop_item_content_wrap_end(){
            ?>
        </div>
        <?php
    }
        /**
         * add wrapper for title, price and add to cart item and product summery for single product page
         * @sinsce 1.0.2
         * */
    public function woocommerce_before_single_product_summary_wrapper_start()
    {
        ?>
        <div class="woocommmerce-product-single-page-top-content-wrap">
            <div class="woocommerce-thumbnail-wrapper">
                <?php
                }

                /**
                 * add wrapper for title, price and add to cart item and product summery for single product page
                 * @sinsce 1.0.2
                 * */
                public function woocommerce_before_single_product_summary_wrapper_end(){
                ?>
            </div>
            <?php
            }
            /**
             * add wrapper for title, price and add to cart item . single product page thumbnail wrap
             * @sinsce 1.0.2
             * */
            public function woocommerce_before_single_product_thumbnail_wrapper_end(){
            ?>
        </div>
        <?php
    }
        /**
         * add wrapper for my account navigation and content
         * @sinsce 1.0.2
         * */
    public function woocommerce_before_account_navigation_wrapper_start()
    {
        ?>
        <div class="woocommerce-my-account-page-wrapper">
            <?php
            }
            /**
             * add wrapper for my account navigation and content
             * @sinsce 1.0.2
             * */
            public function woocommerce_before_account_navigation_wrapper_end(){
            ?>
        </div>
        <?php
    }

        public function softim_quanity_script()
        {
            ?>
            <script type='text/javascript'>
                jQuery(function ($) {
                    if (!String.prototype.getDecimals) {
                        String.prototype.getDecimals = function () {
                            var num = this,
                                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                            if (!match) {
                                return 0;
                            }
                            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                        }
                    }
                    // Quantity "plus" and "minus" buttons
                    $(document.body).on('click', '.plus, .minus', function () {
                        var $qty = $(this).closest('.quantity').find('.qty'),
                            currentVal = parseFloat($qty.val()),
                            max = parseFloat($qty.attr('max')),
                            min = parseFloat($qty.attr('min')),
                            step = $qty.attr('step');

                        // Format values
                        if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
                        if (max === '' || max === 'NaN') max = '';
                        if (min === '' || min === 'NaN') min = 0;
                        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

                        // Change the value
                        if ($(this).is('.plus')) {
                            if (max && (currentVal >= max)) {
                                $qty.val(max);
                            } else {
                                $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                            }
                        } else {
                            if (min && (currentVal <= min)) {
                                $qty.val(min);
                            } else if (currentVal > 0) {
                                $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                            }
                        }

                        // Trigger change event
                        $qty.trigger('change');
                    });
                });
            </script>
            <?php
        }

    }//end class
    if (class_exists('Softim_Woocomerce_Customize')) {
        Softim_Woocomerce_Customize::getInstance();
    }
}