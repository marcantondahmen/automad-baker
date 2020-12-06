<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<div id="docs-sidebar-modal" class="docs-sidebar uk-modal">
		<div class="uk-modal-dialog uk-modal-dialog-blank">
			<div class="uk-margin-bottom">
				<@ search.php @>
			</div>
			<div data-docs-nav="@{ url }">
				<# The navigation gets cloned using JS from the hidden #docs-nav in the footer. #>
			</div>
		</div>
	</div>
		