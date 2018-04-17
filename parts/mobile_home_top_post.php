<div class="container post_mobile_story ">
    <div class="featured-section__update ">
        <?php if ($title = get_field('updates_title')): ?>
            <h3 class="featured-section__title"><?php echo $title ?></h3>
        <?php endif ?>
        <?php if ($update_title = get_field('featured_story')): ?>
            <h2><?php echo $update_title ?></h2>
        <?php endif; ?>

        <?php if ($featured_story = get_field('alerts')):
            /** @var WP_Post $featured_story */
            ?>
            <div class="featured-story">
                <?php if ($title = get_field('alerts_title')): ?>
                    <h3 class="post__title"><?php echo $title; ?></h3>
                <?php endif; ?>
                <?php $story_excerpt = $featured_story->post_content; ?>
                <p><?php echo wp_trim_words($story_excerpt, 15) ?></p>
                <a href="<?php echo get_the_permalink($featured_story->ID); ?>"
                   class="button"><?php _e('Read more', 'surgery'); ?></a>
            </div>
        <?php endif; ?>
        <?php if ($featured_story = get_field('recent_news')):
            /** @var WP_Post $featured_story */
            ?>
            <div class="featured-story">
                <?php if ($title = get_field('recent_news_title')): ?>
                    <h3 class="post__title"><?php echo $title; ?></h3>
                <?php endif; ?>

                <?php $story_excerpt = $featured_story->post_content; ?>
                <p><?php echo wp_trim_words($story_excerpt, 15) ?></p>
                <a href="<?php echo get_the_permalink($featured_story->ID); ?>"
                   class="button"><?php _e('Read more', 'surgery'); ?></a>
            </div>
        <?php endif; ?>
    </div>

</div>
