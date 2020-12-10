<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@~ newPagelist { 
	type: 'children', 
	context: @{ showPagesBelow },
	excludeCurrent: true,
	filter: @{ ?filter },
	match: '{"url": "#@{ filterPagelistByUrl }#"}',
	sort: @{ ?sort | def (@{ sortPagelist }) | def('date desc') },
	limit: @{ itemsPerPage | def(8) },
	page: @{ ?page | def(1) }
} ~@>

<@ if @{ checkboxShowAllPagesInPagelist } @>
	<@~ pagelist { type: false } ~@>
<@ end @>

<@~ if @{ ?search } ~@>
	<@ pagelist { 
		type: false,
		match: false, 
		search: @{ ?search }
	} @>
<@~ end ~@>

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
	<hr>
<@ end @>
<@ pagination.php @>
<@ footer_nav.php @>

