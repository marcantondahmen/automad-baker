<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

	<nav class="docs-navbar">
		<ul class="docs-navbar-nav" data-uk-sticky="{top: 0, media: '(min-height: 450px)'}">	
			<li class="docs-navbar-brand<@ if @{ :template | match('/sidebar/') } @> uk-hidden-large<@ end @>">
				<@ logo.php @>
			</li>
			<li>
				<div class="docs-navbar-items">
					<# 
					Expose variable to dashboard
					@{ checkboxShowInNavbar } 
					#>
					<@ newPagelist { 
						excludeHidden: false,
						match: '{ "checkboxShowInNavbar": "/.+/" }'
					} ~@>
					<@ foreach in pagelist ~@>
						<a href="@{ url }" class="docs-navbar-items-button">
							@{ title }
						</a>	
					<@~ end @>
				</div>
			</li>
			<li class="docs-navbar-search">
				<@ search.php @>
			</li>
			<li class="uk-visible-large">
				<div class="docs-navbar-icons uk-flex">
					<@ if @{ urlGithub } @>
						<a
						href="@{ urlGithub }"
						title="GitHub"
						target="_blank"
						>
							<i class="uk-icon-github-alt"></i>
						</a>
					<@ end @>
					<@ if @{ urlTwitter } @>
						<a
						href="@{ urlTwitter }"
						title="Twitter"
						target="_blank"
						>
							<i class="uk-icon-twitter"></i>
						</a>
					<@ end @>
					<@ if @{ urlFacebook } @>
						<a
						href="@{ urlFacebook }"
						title="Facebook"
						target="_blank"
						>
							<i class="uk-icon-facebook-square"></i>
						</a>
					<@ end @>
					<@ if @{ urlInstagram } @>
						<a
						href="@{ urlInstagram }"
						title="Instagram"
						target="_blank"
						>
							<i class="uk-icon-instagram"></i>
						</a>
					<@ end @>
				</div>
			</li>
			<li 
			<@ if @{ :template | match('/sidebar/') } @>
				class="uk-hidden-large"	
			<@ end @>  
			>
				<a 
				href="#docs-sidebar-modal"
				class="docs-navbar-toggle" 
				data-uk-modal
				>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</nav>	
	<@ sidebar_modal.php @>
	