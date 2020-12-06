<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

		<li 
		id="docs-sidebar" 
		class="docs-sidebar uk-width-large-1-4 uk-visible-large"
		>	
			<div data-uk-sticky>
				<div class="docs-sidebar-scroll">
					<div class="docs-navbar-push">
						<@ logo.php @>
						<div data-docs-nav="@{ url }">
							<# The navigation gets cloned using JS from the hidden #docs-nav in the footer. #>
						</div>
					</div>
				</div>
			</div>
		</li>
