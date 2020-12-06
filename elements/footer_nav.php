<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
		
		<div class="docs-footer">
			<@ if @{ :template } != 'home' @>
				<hr />	
			<@ end @>	
			<# Breadcrumbs. #>
			<@ breadcrumbs.php @>
			<div class="uk-margin-bottom uk-margin-top">
				<# 
				Expose variable to dashboard
				@{ checkboxShowInFooter } 
				#>
				<@ newPagelist { 
					excludeHidden: false,
					match: '{ "checkboxShowInFooter": "/.+/" }'
				} ~@>
				<@ foreach in pagelist ~@>
					<a href="@{ url }">
						@{ title }
					</a>
					<br />
				<@~ end @>
			</div>
			<div class="uk-margin-bottom">
				<a href="/">
					&copy @{ :now | dateFormat ('Y') } @{ sitename }
				</a>	
			</div>
		</div>
		