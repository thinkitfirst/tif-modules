<?php

/* Filename: tif-search-modal.php
 * Author: Solomon Closson (Think It First)
 * Description: Outputs a Search Boostrap Modal that fills the width and height of the entire page, when triggered.
 * Note:  No parameters needed for this to work, should have basic mixins from the tif-theme sass file however...
 * 		  Just change the colors and add in fonts needed within the themes style.scss file.
 */

?>
<div id="tif-search-modal" class="modal hide tif-search-modal">
	<div class="modal-dialog w-100 h-100">
		<div class="modal-content">
			<div class="modal-header py-4">
				<div class="form-wrapper mx-auto my-2">
					<span class="underline"></span>
					<?php get_search_form(); ?>
				</div>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<?php
			/*
			// These sections not being used... but could be, if needed...
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
