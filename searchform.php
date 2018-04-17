<?php
/**
 * Searchform
 *
 * Custom template for search form
 */
?>

<!-- BEGIN of search form -->
<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="s" class="hidden">Search Terms</label>
	<input type="search" name="s" id="s" placeholder="<?php _e('Search Site', 'foundation'); ?>" value="<?php echo get_search_query(); ?>"/>
	<button type="submit" name="submit" id="searchsubmit" ><?php _e('Search', 'foundation'); ?></button>
</form>
<!-- END of search form -->