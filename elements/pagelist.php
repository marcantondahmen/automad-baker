<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<# Configure pagelist. #>
<@ newPagelist { 
	filter: @{ ?filter }, 
	search: @{ ?search },
	sort: @{ sortPagelist | def(':basename asc') },
	limit: 8,
	page: @{ ?page | def(1) }
} @>
<div class="docs-buttons-stacked uk-margin-top-remove uk-margin-bottom">
	<# Filter button. #>
	<div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
		<button class="uk-button uk-button">
			<@~ if @{ ?filter } ~@>
				@{ ?filter }
			<@~ else ~@>
				@{ labelShowAll | def ('Show All') }
			<@~ end ~@>
			&nbsp;&nbsp;<i class="uk-icon-caret-down"></i>
		</button>
		<div class="uk-dropdown uk-dropdown-small uk-dropdown-scrollable uk-text-left">
			<ul class="uk-nav uk-nav-dropdown">
				<li>
					<# Also reset pagination! #>
					<a href="?<@ queryStringMerge { filter: false, page: 1 } @>">
						@{ labelShowAll | def ('Show All') }
						<@ if not @{ ?filter } @>&nbsp;✓<@ end @>
					</a>
				</li>
				<@ foreach in filters @>
				<li>
					<a href="?<@ queryStringMerge { filter: @{ :filter }, page: 1 } @>">
						@{ :filter }
						<@ if @{ ?filter } = @{ :filter } @>&nbsp;✓<@ end @>
					</a>
				</li>
				<@ end @>
			</ul>
		</div>
	</div>
	<@ if @{ ?search } @>
		<a 
		href="?<@ queryStringMerge { search: false } @>" 
		class="uk-button"
		>
			"@{ ?search }"&nbsp;&nbsp;✗
		</a>
	<@ end @>
</div>
<@ if @{ :pagelistGrid } @>
	<@ ../blocks/pagelist/masonry.php @>
<@ else @>
	<@ ../blocks/pagelist/simple.php @>
<@ end @>
<@ pagination.php @>
<@ footer_nav.php @>

