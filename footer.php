<?php
/**
 * Footer
 */
?>


<!-- BEGIN of footer -->
<footer class="footer">
    <div class="contact_info red">
        <div class="container">
            <div class="content-around">
                <?php if (have_rows('contact_info', 'options')): ?>
                    <?php while (have_rows('contact_info', 'options')): the_row();
                        // Declare variables below
                        $title = get_sub_field('title');
                        $text = get_sub_field('info');
                        $pdf = get_sub_field('pdf_file');
                        $if_pdf = get_sub_field('if_need_pdf');
                        // Use variables below ?>
                        <div class="contact_info__single">
                            <div class="contact_info__single_content">
                                <h3 class="matchHeight contact_info__title"><?php echo $title; ?></h3>
                                <?php echo $text; ?>
                                <?php if ($if_pdf): ?>
                                    <a class="pdf" href="<?php echo $pdf['url']; ?>"><?php _e('Download PDF') ?></a>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container footer__nav">
        <div class="row">
            <div class="col-md-4 col-sm-4 matchHeight">

                <?php if ($title = get_field('title_menu_home', 'options')): ?>
                    <h3 class="title"><?php echo $title ?></h3>
                <?php endif ?>
                <?php
                if (has_nav_menu('footer-menu-home', 'options')) {
                    wp_nav_menu(array('theme_location' => 'footer-menu-home', 'menu_class' => 'footer-menu', 'depth' => 1));
                }
                ?>
            </div>
            <div class="col-md-4 col-sm-4 matchHeight">
                <?php if ($title = get_field('title_menu_business', 'options')): ?>
                    <h3 class="title"><?php echo $title ?></h3>
                <?php endif ?>
                <?php
                if (has_nav_menu('footer-menu-business', 'options')) {
                    wp_nav_menu(array('theme_location' => 'footer-menu-business', 'menu_class' => 'footer-menu', 'depth' => 1));
                }
                ?>
            </div>
            <div class="col-md-4 matchHeight col-sm-4 footer__nav_form_container">
                <?php if ($title = get_field('title_ask_npu', 'options')): ?>
                    <h3 class="title"><?php echo $title ?></h3>
                <?php endif ?>
                <?php the_field('content_ask_npu', 'options') ?>
                <?php if ($form = get_field('footer_form', 'options')): ?>
                    <?php echo do_shortcode('[gravityform id="' . $form['id'] . '" title="false" tabindex=32 description="false" ajax="true"]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <?php if ($presented = get_field('copyright', 'options')): ?>
                <div class="copyright_left">
                    <?php echo $presented ?>
                </div>
            <?php endif; ?>
            <?php if ($presented = get_field('presented', 'options')): ?>
                <div class="copyright_right">
                    <p><?php echo $presented ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <a href="" class="topbutton"></a>
</footer>
</div>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
