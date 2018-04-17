<?php
/**
 * Header
 */
$page_object = get_queried_object();
$post_id     = get_queried_object_id();
$thumb_id = get_post_thumbnail_id($post_id);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, ‘full’, true);
if($thumb_id){$thumb_url = $thumb_url_array[0]; } else { $thumb_url = get_field('header_banner', 'options'); };

?>
<!DOCTYPE html>
<!--[if !(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {
        filter: none;
    }
</style>
<![endif]-->

<head>
    <!-- Set up Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <?php wp_head(); ?>
</head>
<script type="text/javascript">
var _userway_config = {
// uncomment the following line to override default position
// position: 1,
// uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
// language: null,
// uncomment the following line to override color set via widget
color: '#d44342', 
account: 'IZe64anxfs'
};
</script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
<body <?php body_class(); ?>>

<div class="textresizer-js">
<!-- BEGIN of header -->
<header class="header">
    <div class="logo-container-mobile">
        <div class="logo-container-mobile__main">
      
            <?php if ($logo_mobil = get_field('logo_mobile','options')): ?>
                <a href="<?php echo home_url() ?>" class="logo">
                    <img src="<?php echo $logo_mobil['sizes']['medium'] ?>" alt="<?php $logo_mobil['alt'] ?>">
                    <?php if ($text_mobil = get_field('logo_text','options')): ?>
                        <span class="logo_title"><?php echo $text_mobil ?></span>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
            <div class="nav-icon_container">
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
        <div class="nav_menu_mobile">
            <nav class="top-bar" id="main-menu-mob">
                <?php
                if (has_nav_menu('header-menu')) {
                    wp_nav_menu(array('theme_location' => 'header-menu',
                        'menu_class' => 'menu header-menu dropdown',
                        'items_wrap' => '<ul id="%1$s-mob" class="%2$s"  >%3$s</ul>',
                        'walker' => new Foundation_Navigation()));
                }
                ?>
            </nav>
            <div class="header_button" style="padding: 15px">
                <div class="header__search">
                    <?php echo get_search_form() ?>
                </div>
            </div>
<div id="mobile_google_translate_element" style="text-align: center; padding-bottom: 10px;" ></div>
            <div class="get_languages">
                <?php
                $languages = icl_get_languages('skip_missing=0&orderby=code');
                echo '<div class="header__lang_sel" ><ul>';
                echo '<li><a href="#">Select Language</a>';
                echo '<ul>';
                foreach ($languages as $l) {
                    echo '<li class="icl-fr">';
                    echo '<a href="' . $l['url'] . '">';
                    echo icl_disp_language($l['native_name']);
                    echo '</a>';
                    echo '</li>';

                }
                echo '</ul></li></ul></div>';
                ?>
            </div>
        </div>

    </div>
    <div class="logo-container">
        <div class="container ">
            <div class="row  small-collapse">
                <div class="col-lg-5 col-md-4 matchHeight ">
                    <div class="logo text-left ">
                        <?php show_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-right header_contact_info matchHeight">
                    <div class="header_contact_info_content">
                        <?php if ($phone = get_field('phone', 'options')): ?>
                            <a class="header_phone" href="<?php echo $phone['url']; ?>"
                               <?php if ($phone['target']): ?>target="<?php echo $phone['target']; ?>"<?php endif; ?>><?php echo $phone['title']; ?></a>
                        <?php endif ?>
                        <?php if ($address = get_field('address', 'options')) {
                            echo $address;
                        } ?>
                    </div>
                    <ul class="textresizer_container">
                        <li><span class="text_size">Text Size</span>
                            <ul id="text-resizer-controls" class="textresizer">
                                <li><a href=".nogo" class="s0" title="small">A</a></li>
                                <li><a href=".nogo" class="s1" title="medium">A</a></li>
                                <li><a href=".nogo" class="s2" title="larger">A</a></li>
                                <li><a href=".nogo" class="s3" title="large">A</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        var google_translate_elem = ((window.innerWidth >= 630)) ? 'google_translate_element' : 'mobile_google_translate_element';
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,fr,pt,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, google_translate_elem);
                        }
                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                </div>
                <div class="col-lg-4 col-md-4 header_button matchHeight">

                    <?php if (have_rows('header_buttons', 'options')): ?>
                        <div class="row">
                            <?php while (have_rows('header_buttons', 'options')): the_row();
                                // Declare variables below
                                $external = get_sub_field('external');
                                $style = get_sub_field('style');
                                $text = get_sub_field('text');
                                $more = get_sub_field('link');
                                // Use variables below ?>
                                <div class="col-md-6">
                                    <a class="button <?php echo $style ?>" href="<?php echo $more; ?>"
                                       <?php if ($external): ?>target="_blank" <?php endif; ?>><?php echo $text; ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="header__search">
                        <?php echo get_search_form() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ($image = get_field('header_banner', 'options')): ?>
        <div class="container-fluid">

            <div class="banner" style="<?php if (is_front_page()){ echo 'height:300px; '; } ?>background-image: url(<?php echo $thumb_url; ?>)">
                <?php if ($alert_on = get_field('banner_alert', 'options')): ?>
                    <div class="banner__alert">
                        <span class="alert_image"></span>
                        <span class="alert_text"><?php _e('Alert') ?></span>
                        <?php if ($alert = get_field('banner_alert_link', 'options')): ?>
                            <a href="<?php echo $alert ?>"
                               <?php if (get_field('banner_alert_link_external', 'options')): ?>target="_blank" <?php endif; ?>>
                                <span><?php the_field('banner_alert_link_text', 'options') ?></span>
                                <span class="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                <span class="close_alert"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($link = get_field('mobile_donate_button_link', 'options')): ?>
                    <a class="button mobile_donate_btn <?php the_field('mobile_donate_button_link_style', 'options') ?>" href="<?php echo $link['url']; ?>"
                       target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                <?php endif ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="header__main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <nav class="top-bar" id="main-menu">
                        <?php
                        if (has_nav_menu('header-menu')) {
                            wp_nav_menu(array('theme_location' => 'header-menu',
                                'menu_class' => 'menu header-menu dropdown',
                                'items_wrap' => '<ul id="%1$s" class="%2$s"  >%3$s</ul>',
                                'walker' => new Foundation_Navigation()));
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- END of header -->
