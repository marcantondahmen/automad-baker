<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ set { 
	:hideThumbnailsCache: @{ :hideThumbnails | def(0) },
	:teaserClassCache: @{ :teaserClass | def('not-stretched') },
	:gridSizeCache: @{ :gridSize | def('large') }
} @>
