<?php $link = get_sub_field('link');
$style = get_sub_field('style'); ?>
<?php if ($link): ?>
    <div class="btn-container">
        <a class="button <?php echo $style ?>" href="<?php echo $link['url']; ?>"
           target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
    </div>
<?php endif; ?>
