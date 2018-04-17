<?php $terms = get_field('category_to_show');
$cat = array();
 foreach ($terms as $term):
     $cat[] = $term->name;
 endforeach;
 $img = implode(", ", $cat); ?>
<?php $arg = array(
    'post_type' => 'rates_and_fees', /*<-- Enter name of Custom Post Type here*/
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'rates_category',
            'field'    => 'name',
            'terms'    => $cat
        ),
    ),
);
$the_query = new WP_Query($arg);
if ($the_query->have_posts()) : ?>
    <div class="rates_and_fees__list">
        <div class="row"> <?php $i = 1 ?>
            <?php while ($the_query->have_posts()) :
            $the_query->the_post();
            $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

            <?php if (have_rows('main')): ?>

                <?php while (have_rows('main')) : the_row();

                    if (get_row_layout() == 'rates'): ?>
                        <div class="col-md-6 col-sm-6 matchHeight">
                            <a href="<?php the_permalink() ?>" class="rate__container show_rate-<?php echo $i ?>"
                               data-id="show_rate-<?php echo $i ?>">
                                <?php if ($image = get_sub_field('image')): ?>
                                    <span <?php bg($image, 'medium_large'); ?>
                                            class="rates_and_fees__list__image"></span>
                                <?php endif; ?>
                                <span class="rate__content">
                                <?php if ($title = get_sub_field('title')): ?>
                                    <h2><?php echo $title; ?></h2>
                                <?php endif; ?>
                                    <?php if ($short_info = get_sub_field('short_info')): ?>
                                        <p><?php echo $short_info; ?></p>
                                    <?php endif; ?>
                            </span>
                            </a>
                        </div>
                    <?php endif;
                endwhile; ?>
            <?php else :
                // no layouts found
            endif; ?>
            <?php $i++; ?>
            <?php endwhile; ?><!-- END of Post --></div>
    </div><!-- END of .post-type -->
<?php endif;
wp_reset_query(); ?>