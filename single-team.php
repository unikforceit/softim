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
$team_meta = get_post_meta(get_the_ID(), 'softim_team_options', true);
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
                                <span class="sub-title"><?php echo esc_html($team_meta['designation']); ?></span>
                                <div class="team-social-area">
                                    <ul class="team-social">
                                        <?php

                                        if ($team_meta['social-icons']) {
                                            foreach ($team_meta['social-icons'] as $team_icon) {
                                                ?>
                                                <li><a href="<?php echo esc_url($team_icon['url']['url']); ?>"><i
                                                                class="<?php echo esc_attr($team_icon['icon']); ?>"></i></a>
                                                </li>
                                            <?php }
                                        } ?>
                                    </ul>
                                </div>
                                <p><?php echo esc_html($team_meta['description']); ?></p>
                                <p><?php echo esc_html($team_meta['description2']); ?></p>
                                <div class="team-signature">
                                    <?php echo wp_get_attachment_image($team_meta['sign']['id'], 'full'); ?>
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
                            <?php
                            if ($team_meta['team-tab']) {
                                $btn = 0;
                                foreach ($team_meta['team-tab'] as $button) {
                                    $btn++;
                                    if ($btn == 1) {
                                        $act = 'active';
                                        $data = 'true';
                                    } else {
                                        $act = '';
                                        $data = 'false';
                                    }
                                    $btn_title = $button['tabTitle'];
                                    $btn_title = strtolower($btn_title);
                                    $btn_title = preg_replace('/\s/', '', $btn_title);
                                    ?>
                                    <button class="nav-link <?php echo esc_attr($act); ?>"
                                            id="<?php echo esc_attr($btn_title); ?>-tab" data-toggle="tab"
                                            data-target="#<?php echo esc_attr($btn_title); ?>" type="button" role="tab"
                                            aria-controls="<?php echo esc_attr($btn_title); ?>"
                                            aria-selected="<?php echo esc_attr($data); ?>"><?php echo esc_html($button['tabTitle']); ?></button>
                                <?php }
                            } ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <?php
                        if ($team_meta['team-tab']) {
                            $btn1 = 0;
                            foreach ($team_meta['team-tab'] as $tab) {
                                $btn1++;
                                if ($btn1 == 1) {
                                    $act1 = 'show active';
                                } else {
                                    $act1 = '';
                                }
                                $btn_title1 = $tab['tabTitle'];
                                $btn_title1 = strtolower($btn_title1);
                                $btn_title1 = preg_replace('/\s/', '', $btn_title1);
                                ?>
                                <div class="tab-pane fade <?php echo esc_attr($act1); ?>"
                                     id="<?php echo esc_attr($btn_title1); ?>" role="tabpanel"
                                     aria-labelledby="<?php echo esc_attr($btn_title1); ?>-tab">
                                    <div class="team-overview">
                                        <?php if ($tab['team-tab-content']) {
                                            foreach ($tab['team-tab-content'] as $tbc) {
                                                ?>
                                                <div class="team-overview-content">
                                                    <h4 class="title"><?php echo esc_html($tbc['tabcTitle']); ?></h4>
                                                    <p><?php echo esc_html($tbc['tabcInfo']); ?></p>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                </div>
                            <?php }
                        } ?>
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