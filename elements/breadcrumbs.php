<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
		
		<@ if @{ :level } @>
			<@ newPagelist { type: 'breadcrumbs', excludeHidden: false } @>
			<ul class="uk-breadcrumb">
				<@ foreach in pagelist @>
					<li><a href="@{ url }">@{ title }</a></li> 	 
				<@ end @>
			</ul>
		<@ end @>