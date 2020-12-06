<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ navbar.php @>
<h1>@{ title }</h1>
<@ tags.php @>
<@ if not @{ checkboxHideDate } @>
	<p class="uk-text-muted">@{ date | dateFormat (@{ formatDate | def ('l, F jS Y')}, @{ locale }) }</p>
<@ end @>
<# Content. #>
<div class="docs-content uk-margin-small-top">
	@{ +main }	
</div>
<# Children nav for small devices. #>
<@ newPagelist { type: 'children' } @>
<@ if @{ :pagelistCount } @>
	<div class="uk-hidden-large">
		<hr />
		<h2 class="uk-margin-top uk-margin-bottom">
			More in @{ title }
		</h2>
		<ul class="docs-nav docs-nav-large">
			<@ foreach in pagelist @>
				<li><a href="@{ url }">@{ title }</a></li>
			<@ end @>
		</ul>
	</div>
<@ end @>
<# Related pages. #>
<@ if not @{ checkboxHideRelatedPages } @>
	<@ newPagelist { 
		excludeHidden: false,
		type: 'related',
		sort: ':path asc'
	} @>
	<@ if @{ :pagelistCount } @>
		<hr />
		<h2 class="uk-margin-top">Related</h2>
		<@ ../blocks/pagelist/simple.php @>
	<@ end @>
<@ end @>
<@ footer_nav.php @>