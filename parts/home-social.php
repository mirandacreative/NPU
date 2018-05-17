<section class="social">
    <div class="container">
        <div class="row">

            <?php if ($title = get_field('section_title')): ?>
                <div class="col-sm-12 mobile_hide">
                    <h2 class="white_title"><?php echo $title ?></h2>
                </div>
            <?php endif; ?>
            <div class="social_btn_mobile">
                <?php if ($title = get_field('mobile_social_title')): ?><h2
                        class="social_mobile_title"><?php echo $title ?></h2><?php endif; ?>
                <?php if (have_rows('mobile_social_link')): ?>
                    <?php while (have_rows('mobile_social_link')): the_row();
                        $style = get_sub_field('style');
                        $link = get_sub_field('link'); ?>
                        <?php if ($link): ?>
                            <a class="button <?php echo $style ?>"
                               href="<?php echo $link['url']; ?>"
                               target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 social__single mobile_hide">
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/NPUtilities/" data-tabs="timeline"
                     data-width="500"
                     data-height="500" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="true"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/NPUtilities/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/NPUtilities/">Norwich Public Utilities</a>
                    </blockquote>
                </div>

            </div>
            <div class="col-md-4 social__single  mobile_hide">
              <a class="twitter-timeline" data-height="500" href="https://twitter.com/NPUtilities?ref_src=twsrc%5Etfw">Tweets by NPUtilities</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-md-4 social__single ">
                <?php if ($title = get_field('safety_training')): ?>
                    <h2 class="social_mobile_title"><?php echo $title ?></h2><?php endif; ?>
                <div class="social__own_news">
                    <?php the_field('own_news') ?>
                    <?php if ($link = get_field('own_news_link')): ?>
                        <a class="button <?php the_field('own_news_link_style') ?>" href="<?php echo $link['url']; ?>"
                           target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</section>
