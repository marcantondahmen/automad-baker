<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ navbar.php @>
<# In case the search string matches an existing URL, redirect to that URL. #>
<@ with @{ ?search } @>
	<@ redirect { url: @{ url } } @>
<@ end @>

<@ pagelist.php @>

<# In case there is only one single search result, redirect to that page. #>
<@ if @{ ?search } and @{ :pagelistCount } = 1 @>
	<@ foreach in pagelist @>
		<@ redirect { url: @{ url } } @>
	<@ end @>
<@ end @>