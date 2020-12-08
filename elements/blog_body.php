<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ set { 
	:pagelistGrid: true,
	:hideThumbnails: @{ checkboxHideThumbnails },
	:teaserClass: false
} @>
<@ if @{ checkboxStretchThumbnails } @>
	<@ set { 
		:teaserClass: 'am-stretched'
	} @>
<@ end @>
<@ navbar.php @>
<@ title.php @>
<div class="docs-content uk-margin-small-top">
	@{ +main }	
	<@ pagelist.php @>
</div>