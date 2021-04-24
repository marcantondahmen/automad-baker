<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<div id="baker-sidebar-modal" class="baker-sidebar uk-modal">
		<div class="uk-modal-dialog uk-modal-dialog-blank">
			<div class="uk-margin-bottom">
				<@ search.php @>
			</div>
			<div data-baker-nav="@{ url }">
				<# The navigation gets cloned using JS from the hidden #baker-nav in the footer. #>
			</div>
		</div>
	</div>
		