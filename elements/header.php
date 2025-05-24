<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!DOCTYPE html>
<html lang="en" class="baker-@{ :template | sanitize }">
<head>
	<?php if (substr(AM_VERSION, 0, 1) == '1') { ?>
		<@ set {
			<# Variables used by the MetaTag extension. #>
			:tagTitle: @{ metaTitle | def("@{ sitename } / @{ title | def('404') }") },
			:tagDescription: @{ metaDescription | def(@{ +main }) | stripTags }
		} @>
		<title>@{ :tagTitle }</title>
		<@ Automad/MetaTags {
			description: @{ :tagDescription },
			ogTitle: @{ :tagTitle },
			ogDescription: @{ :tagDescription },
			ogImage: @{ ogImage },
			twitterCard: 'summary_large_image'
		} @>
	<?php } ?>
	<@ favicons.php @>
	<link href="https://fonts.googleapis.com/css?family=Fira+Mono:400,500" rel="stylesheet">
	<link href="/packages/@{ theme }/dist/libs.min.css" rel="stylesheet">
	<link href="/packages/@{ theme }/dist/baker.min.css" rel="stylesheet">
	<script src="/packages/@{ theme }/dist/libs.min.js"></script>
	<script src="/packages/@{ theme }/dist/baker.min.js"></script>
	<script>
		var autocomplete = <@ autocomplete.php @>;
	</script>
	@{ itemsHeader }
</head>

<body>
	<div class="uk-container uk-container-center uk-position-relative">
