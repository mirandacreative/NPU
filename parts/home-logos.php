<section class="logos">
    <div class="container">
        <div class="row">
            <div class="col-md-9 matchHeight logos__content">
                <div class="logos__content__inner">
                    <?php the_field('content_logos') ?>
                </div>
            </div>
            <?php if (have_rows('logos_select')): ?>
                <div class="col-md-3  matchHeight logos__container">
                    <div class="logos__icon">
                        <div class="logos__icon__container">
                            <?php while (have_rows('logos_select')): the_row();
                                // Declare variables below
                                $image = get_sub_field('image');
                                $external = get_sub_field('external');
                                $link = get_sub_field('link');
                                // Use variables below ?>

                                <div class="single_logo_container text-center">
                                    <a class="single_logo"
                                       href="<?php echo $link; ?>" <?php bg($image, 'medium_large') ?>
                                        <?php if ($external): ?> target="_blank"<?php endif; ?>><?php echo $image['alt'] ?></a>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>