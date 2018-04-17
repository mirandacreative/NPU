<div class="info_content_and_link">
    <?php
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $if_need_link = get_sub_field('if_need_link');
    $link = get_sub_field('link');
    $link_style = get_sub_field('link_style'); ?>
    <?php if ($title): ?>
        <h2 class="title__section text-center"><?php echo $title ?></h2>
    <?php endif; ?>

    <?php if ($image): ?>
        <span class="image__section" <?php bg($image, 'large') ?> alt="<?php echo $image['alt'] ?>"></span>
    <?php endif; ?>
    <?php echo $content ?>
    <?php if ($if_need_link && $link): ?>
        <a class="button <?php the_sub_field('link_style') ?>" href="<?php echo $link['url']; ?>"
           target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
    <?php endif; ?>
</div>