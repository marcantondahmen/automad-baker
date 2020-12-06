<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<form 
	class="docs-search uk-form" 
	action="@{ urlSearchResults | def('/') }" 
	method="get" 
	data-docs-autocomplete-submit
	>	
		<div 
		class="uk-autocomplete" 
		data-uk-autocomplete="{source: autocomplete}"
		>
			<input 
			class="uk-form-controls uk-width-1-1" 
			title="" 
			name="search" 
			type="search" 
			placeholder="Search" 
			required
			/>
		</div>
	</form>
	