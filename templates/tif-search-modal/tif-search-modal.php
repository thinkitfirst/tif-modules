<?php

?>
<div id="tif-search-modal" class="modal hide tif-search-modal<?php echo !empty($theme) ? ' theme-' . $theme : ''; ?>">

	<!-- TIF Modal -->
	<div class="modal-dialog w-100 h-100">
		<div class="modal-content">

			<div class="modal-header py-4">
				<?php get_search_form(); ?>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<?php
			/*
			<div class="modal-body">
				Modal body..
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			*/ ?>

		</div>
	</div>

</div>
