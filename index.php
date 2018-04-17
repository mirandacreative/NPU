<?php
/**
 * Index
 *
 * Standard loop for the front-page
 */
get_header(); ?>
<div class="container">


	<div class="row">
		<!-- BEGIN of main content -->
		<div class="col-lg-8 col-md-8 col-sm-12 ">
			<main class="main-content">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<!-- BEGIN of Post -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="row">
								<?php if (has_post_thumbnail()) : ?>
									<div class=" col-md-4 ">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail('medium'); ?>
										</a>
									</div>
								<?php endif; ?>
								<div class="<?php echo has_post_thumbnail() ? 'col-md-8' : ''; ?> ">
									<h3>
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>" rel="bookmark">
											<?php the_title(); ?>
										</a>
									</h3>
									<?php if (is_sticky()) : ?>
										<span class="secondary label"><?php _e('Sticky', 'foundation'); ?></span>
									<?php endif; ?>
									<?php the_excerpt(); // Use wp_trim_words() instead if you need specific number of words ?>

									<p class="entry-meta">Written by <?php the_author_posts_link(); ?> on <?php the_time(get_option('date_format')); ?></p>
								</div>
							</div>
						</article>
						<!-- END of Post -->
					<?php endwhile; ?>
				<?php endif; ?>
				<!-- BEGIN of pagination -->
				<?php foundation_pagination(); ?>
				<!-- END of pagination -->
			</main>
		</div>
		<!-- END of main content -->
		<!-- BEGIN of sidebar -->
		<div class="col-lg-4 col-md-4 col-sm-12  sidebar">

			<?php get_sidebar('right'); ?>
		</div>
		<!-- END of sidebar -->
	</div>
</div>
<?php get_footer(); ?>