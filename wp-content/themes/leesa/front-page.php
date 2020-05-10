<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="fw-image">
	<div class="main-title"	>
		<h1>Grow Your Own Business Online</h1>
		<div class="subH1">Digital Marketing and Custom Web Apps</div>
		<div class="serviceBtn"><a href="/services" class="btn btn-teal btnicon">View Our Services <i class="material-icons right">chevron_right</i></a></div>
	</div>
</div>

<div class="container">
	<div class="sidebarLayoutContainer">
		<!-- include sidebar -->
		<?php get_sidebar() ?>
		<div class="sidecontent">
		
			<?php get_template_part( 'template-parts/featuredPostsByCategory'); ?>
		</div>
	</div>
<?php
	if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

		<div id="post-<?php the_ID(); ?>">
			<div class="page-content"><?php the_content(); ?></div>
		</div>

	<?php endwhile;
endif;
?>
</div>
<?php get_footer(); ?>