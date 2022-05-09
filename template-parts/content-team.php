<?php $team_meta = get_post_meta(get_the_ID(), 'softim_team_options', true); ?>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
    <div class="team-item">
        <div class="team-thumb">
            <?php if (has_post_thumbnail()) { ?>

                <?php the_post_thumbnail('full'); ?>

            <?php } ?>
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
        </div>
        <div class="team-content">
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <span class="sub-title"><?php echo esc_html($team_meta['designation']); ?></span>
        </div>
    </div>
</div>