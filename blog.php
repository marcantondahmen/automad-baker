<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ elements/header.php @>

		<ul class="uk-grid" data-docs-scrolled>
			<li class="uk-width-1-1 docs-navbar-push">
				<@ set { :gridSize: 'large' } @>
				<@ if @{ checkboxSmallPagelistGrid } @>
					<@ set { :gridSize: 'small' } @>
				<@ end @>
				<@ elements/blog_body.php @>
			</li>
		</ul>

<@ elements/footer.php @>