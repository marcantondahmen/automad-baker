<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ set { 
	:pagelistGrid: true,
	:hideThumbnails: @{ checkboxHideThumbnails },
	:teaserClass: 'not-stretched'
} @>
<@ if @{ checkboxStretchThumbnails } @>
	<@ set { 
		:teaserClass: 'am-stretched'
	} @>
<@ end @>