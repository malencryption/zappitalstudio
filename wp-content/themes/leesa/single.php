<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="container">
	<?php
	if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

		<div id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div class="page-content"><?php the_content(); ?></div>
		</div>

	<?php endwhile;
endif;
?>
</div>
<?php get_footer(); ?>