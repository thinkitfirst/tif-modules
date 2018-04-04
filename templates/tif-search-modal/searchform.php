<?php

$search_query = get_search_query();
$search_query = !empty($search_query) ? trim(urldecode($search_query)) : '';
$error = get_query_var('error'); ?>

<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="row">
		<div class="col-24">
			<label for="s" class="sr-only"><?php _e('Search', 'ceo'); ?></label>
			<input type="text" class="search-field w-100" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'ceo'); ?>" value="<?php echo !empty($search_query) && empty($error) ? $search_query : ''; ?>" />
		</div>
	</div>
	<input type="submit" class="submit d-none" id="searchsubmit" value="<?php esc_attr_e('Search', 'ceo'); ?>" />
</form>