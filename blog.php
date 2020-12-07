<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ elements/header.php @>

		<@ set { 
			:pagelistGrid: true,
			:hideThumbnails: @{ checkboxHideThumbnails },
			:teaserClass: false
		} @>

		<@ if @{ checkboxStretchThumbnails } @>
			<@ set { 
				:teaserClass: 'am-stretched'
			} @>
		<@ end @>

		<ul class="uk-grid" data-docs-scrolled>
			<li class="uk-width-1-1 docs-navbar-push">
				<@ elements/navbar.php @>
				<@ elements/title.php @>
				<div class="docs-content uk-margin-small-top">
					@{ +main }	
					<@ elements/pagelist.php @>
				</div>
			</li>
		</ul>

<@ elements/footer.php @>