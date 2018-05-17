<?php
/**
 * Template Name: Primary Lines Archive
 * Template Post Type:  page
 */
get_header(); ?>
    <div class="breadcrumb">
        <div class="container">
			<?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
        </div>
    </div>

<?php if ($title = get_the_title()): ?>
    <div class="container">
        <h1 class="page-title"><?php echo $title ?></h1>
    </div>
<?php endif; ?>
<?php $terms = get_field('category_to_show');
$cat = array();
foreach ($terms as $term):
	$cat[] = $term->name;
endforeach;
$img = implode(", ", $cat); ?>
<?php $arg = array(
	'post_type' => 'post', /*<-- Enter name of Custom Post Type here*/
	'order' => 'DESC',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'name',
			'terms' => $cat
		),
	),
); ?>
    <div class="container archive-category">
        <div class="row">
			<?php $the_query = new WP_Query($arg);

			if ($the_query->have_posts()) : ?>

                <!-- BEGIN of Archive Content -->
                <div class="col-md-8 col-sm-12">
                    <main class="main-content">
						<?php while ($the_query->have_posts()) :
							$the_query->the_post();
							$do_not_duplicate = $post->ID; ?>

                            <!-- BEGIN of Post -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="row">
									<?php if (has_post_thumbnail()) : ?>
                                        <div class="col-md-4 col-sm-12 ">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<?php the_post_thumbnail('medium'); ?>
                                            </a>
                                        </div>
									<?php endif; ?>
                                    <div class="<?php echo has_post_thumbnail() ? 'col-md-8' : ''; ?> col-sm-12">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"
                                               title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>"
                                               rel="bookmark">
												<?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <p class="entry-meta"><?php the_time(get_option('date_format')); ?></p>
										<?php if (is_sticky()) : ?>
                                            <span class="secondary label"><?php _e('Sticky', 'foundation'); ?></span>
										<?php endif; ?>
										<?php the_excerpt(); ?>
                                        <a href="<?php the_permalink() ?> "
                                           class="button red"><?php if ($text = get_field('post_read_more', 'options')): echo $text;
											else:_e('Read More'); endif; ?></a>
                                    </div>
                                </div>
                            </article>
						<?php endwhile; ?>
                    </main>
                </div>
			<?php endif; ?>
            <!-- END of Archive Content -->
            <!-- BEGIN of Sidebar -->

            <!-- END of Sidebar -->
			<?php wp_reset_query(); ?>

            <div class="col-md-4 col-sm-12 sidebar">
				<?php get_sidebar('right'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>