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
    <?php $i = 1 ?>
    <?php while ($the_query->have_posts()) :
        $the_query->the_post();
        $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->
        <div class="rates_and_fees__list_single " data-id="show_rate-<?php echo $i ?>">
            <?php get_template_part('parts/flex') ?>

        </div>
        <?php $i++ ?>
    <?php endwhile; ?><!-- END of Post -->

<?php endif;
wp_reset_query(); ?>