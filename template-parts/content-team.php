<?php $team_meta = get_post_meta(get_the_ID(), 'softim_team_options', true);?>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
    <div class="team-item">
        <div class="team-thumb">
            <?php if (has_post_thumbnail()) { ?>

                <?php the_post_thumbnail('full'); ?>

            <?php } ?>
            <div class="team-social-area">
                <ul class="team-social">
                    <li><a href="#0"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="team-content">
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <span class="sub-title"><?php echo esc_html($team_meta['designation']); ?></span>
        </div>
    </div>
</div>