<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>

<?php
if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="fw-page">
		<div class="fw-image">
			<div class="sectionTitle">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="container">
			<div class="page-content"><?php the_content(); ?></div>
		</div>
	</div>

<?php endwhile;
endif;
?>
<?php get_footer(); ?>