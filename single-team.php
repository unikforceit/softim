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
                                                <li><a href="<?php echo esc_url($team_icon['url']); ?>"><i
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
                            <?php if ($team_meta['team-tab']) {
                                $tab_btn = 0;
                                foreach ($team_meta['team-tab'] as $tab) {
                                    $tab_btn++;
                                    if ($tab_btn == 1) {
                                        $btn_act = 'active';
                                        $btn_true = 'true';
                                    } else {
                                        $btn_act = '';
                                        $btn_true = 'false';
                                    }
                                    ?>
                                    <button class="nav-link <?php echo esc_attr($btn_act); ?>"
                                            id="<?php echo esc_attr($tab_btn); ?>-tab" data-toggle="tab"
                                            data-target="#<?php echo esc_attr($tab_btn); ?>-tab" type="button"
                                            role="tab" aria-controls="<?php echo esc_attr($tab_btn); ?>"
                                            aria-selected="<?php echo esc_attr($btn_true); ?>">
                                        <?php echo esc_html($team_meta['tabTitle']); ?>
                                    </button>
                                <?php }
                            } ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <?php if ($team_meta['team-tab']) {
                            $tabs = 0;
                            foreach ($team_meta['team-tab'] as $tab) {
                                $tabs++;
                                if ($tabs == 1) {
                                    $tab_act = 'show active';
                                } else {
                                    $tab_act = '';
                                }
                                ?>
                                <div class="tab-pane fade <?php echo esc_attr($tab_act); ?>"
                                     id="<?php echo esc_attr($tabs); ?>-tab" role="tabpanel"
                                     aria-labelledby="<?php echo esc_attr($tabs); ?>-tab">
                                    <div class="team-overview">
                                        <div class="team-overview-content">
                                            <h4 class="title"><?php echo esc_html($team_meta['tabTitle1']); ?></h4>
                                            <p><?php echo esc_html($team_meta['tabTitle1_text']); ?></p>
                                        </div>
                                        <div class="team-overview-content">
                                            <h4 class="title"><?php echo esc_html($team_meta['tabTitle2']); ?></h4>
                                            <p><?php echo esc_html($team_meta['tabTitle2_text']); ?></p>
                                        </div>
                                        <div class="team-overview-content">
                                            <h4 class="title"><?php echo esc_html($team_meta['tabTitle3']); ?></h4>
                                            <p><?php echo esc_html($team_meta['tabTitle3_text']); ?></p>
                                        </div>
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