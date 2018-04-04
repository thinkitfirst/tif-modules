<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="row">
		<div class="col-24">
			<label for="s" class="sr-only"><?php _e('Search', 'ceo'); ?></label>
			<input type="text" class="search-field w-100" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'ceo'); ?>" />
		</div>
	</div>
	<input type="submit" class="submit d-none" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'ceo'); ?>" />
</form>