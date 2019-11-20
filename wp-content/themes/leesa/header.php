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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="topBar">
		<div class="container">
			<div class="topSM">
				<div class="col1">
<!-- 					<div class="title">Leesa Ruzicka - Web App Developer</div>
					<div><i class="icon-envelop white"></i> Leesa.Ruzicka@gmail.com</div> -->
				</div>
				<div class="socialMedia"><?php get_template_part('social-media-menu') ?></div>
			</div>
		</div>
	</div>
	<nav id="main-nav" class="navbar navbar-default navbar-expand-md navbar-light">
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
			</ul>
		</div>
	</div>
</nav>