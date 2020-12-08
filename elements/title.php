<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<h1>@{ title }</h1>
<@ tags.php @>
<@ if not @{ checkboxHideDate } and @{ date } @>
	<p>@{ date | dateFormat (@{ formatDate | def ('l, F jS Y')}, @{ locale }) }</p>
<@ end @>