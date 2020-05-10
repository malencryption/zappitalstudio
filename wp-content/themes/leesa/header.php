<?php
/**
 * The header for our theme.
 *
 * @package Leesa
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/adab9e3f807df5f95f3568858/cd2b094a9fdb55e93d4cac7b3.js");</script>
	<meta name="p:domain_verify" content="4774b49acd5d9f8123478409cae22efa"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div id="topBar">
			<div class="container">
				<div id="topNavWrapper">
					<nav id="topNav" class="navbar">
						<ul class="navbar-nav navbar-expand">
							<?php wp_nav_menu(array(
								'menu' => 'Top Menu',
								'items_wrap'=>'%3$s',
								'container' => false,
								'list_item_class' => "nav-item",
								'link_class' => "nav-link",
							)); ?>
						</ul>
					</nav>
					<div class="topSM">
						<div class="socialMedia"><?php get_template_part('social-media-menu') ?></div>
					</div>
				</div>
			</div>
		</div>
		<nav id="main-nav" class="navbar navbar-default navbar-expand-lg navbar-light">
			<div class="container">
				<div class="logo"><a href="/"><img src="/wp-content/themes/leesa/images/zappital-studio-logo.png"></a></div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-nav-collapse">
					<ul class="navbar-nav ml-auto">
						<?php wp_nav_menu(array(
							'menu' => 'Main Menu',
							'items_wrap'=>'%3$s',
							'container' => false,
							'list_item_class' => "nav-item",
							'link_class' => "nav-link",
						)); ?>
						<?php wp_nav_menu(array(
							'menu' => 'Top Menu',
							'items_wrap'=>'%3$s',
							'container' => false,
							'list_item_class' => "nav-item d-lg-none",
							'link_class' => "nav-link",
						)); ?>
						<li class="socialMedia d-lg-none nav-item"><?php get_template_part('social-media-menu') ?></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>