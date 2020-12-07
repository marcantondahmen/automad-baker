<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ elements/header.php @>

		<@ set { 
			:pagelistGrid: false
		} @>

		<ul class="uk-grid">
			<@ elements/sidebar.php @>
			<li class="uk-width-1-1 uk-width-large-3-4 docs-navbar-push">
				<@ if @{ ?search } or @{ ?filter } @>
					<@ elements/search_results.php @>
				<@ else @>
					<@ elements/page_body.php @>
				<@ end @>
			</li>
		</ul>

<@ elements/footer.php @>