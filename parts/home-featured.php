<!-- BEGIN of featured -->
<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if ($title = get_field('featured_title')): ?>
                    <h3 class="featured-section__title"><?php echo $title ?></h3>
                <?php endif ?>
                <?php $arg = array(
                    'post_type' => 'post', /*<-- Enter name of Custom Post Type here*/
                    'order' => 'ASC',
                    'orderby' => 'menu_order',
                    'posts_per_page' => 5,
                    'category_name' => 'featured'
                );
                $the_query = new WP_Query($arg);
                if ($the_query->have_posts()) : ?>
                    <div id="post-featured" class="post-featured">
                        <?php while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->
                        <a href="<?php the_permalink($post->ID) ?>" class="post-featured__link">
                            <?php the_excerpt(); ?>
                            <ul class="category-name">
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'category');
                                if ($categories && !is_wp_error($categories)) {
                                    foreach ($categories as $category) {
                                        ; ?>
                                        <li><?php echo $category->name ?></li>
                                    <?php }
                                }; ?>
                            </ul>
                            <p class="featured_date"><?php echo get_field('featured_date'); ?></p>
                        </a>
                        <?php endwhile; ?><!-- END of Post -->
                        <?php if ($more_articles=get_field('more_articles','options')): ?>
                            <a href="<?php echo get_site_url(); ?>/category/featured/" class="button blue"><?php _e('MORE ARTICLES') ?></a>
                        <?php endif; ?>
                    </div><!-- END of .post-type -->
                <?php endif;
                wp_reset_query(); ?>
            </div>
            <div class="col-md-4 featured-section__update ">
                <?php if ($title = get_field('updates_title')): ?>
                    <h3 class="featured-section__title"><?php echo $title ?></h3>
                <?php endif ?>
                <?php if ($update_title = get_field('featured_story')): ?>
                    <h2><?php echo $update_title ?></h2>
                <?php endif; ?>

                    <?php if ($alert_on = get_field('banner_alert', 'options')): ?>
                    <div class="featured-story">
                        <h3 class="post__title">Alert</h3>
                        <?php the_field('banner_alert_link_text', 'options') ?>
                        <?php if ($alert = get_field('banner_alert_link', 'options')): ?> 
                        <a href="<?= $alert ?>" class="button">Learn More</a>
                        <?php endif; ?>                      

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
                        <p><?php echo wp_trim_words($story_excerpt, 31) ?></p>
                        <a href="<?php echo get_the_permalink($featured_story->ID); ?>"
                           class="button"><?php _e('Learn more'); ?></a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

</section>

<!-- END of featured -->
