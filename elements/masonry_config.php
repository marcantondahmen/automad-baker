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