<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ elements/header.php @>

		<@ set { 
			:pagelistGrid: false
		} @>

		<ul class="uk-grid" data-docs-scrolled>
			<li class="uk-width-1-1 docs-navbar-push">
				<@ if @{ ?search } or @{ ?filter } @>
					<@ elements/search_results.php @>
				<@ else @>
					<@ elements/page_body.php @>
				<@ end @>
			</li>
		</ul>

<@ elements/footer.php @>