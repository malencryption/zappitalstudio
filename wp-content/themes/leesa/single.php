<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<?php
	if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
		<div class="fw-page">
			<div class="fw-image">
				<div class="sectionTitle">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="container">
				<div id="post-<?php the_ID(); ?>">
					<div class="post-thumbnail"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></div>
					<div class="date"><?php echo get_the_date(); ?></div>
					<div class="page-content"><?php the_content(); ?></div>

					<?php comments_template( '', true ); ?>
				</div>
			</div>
		</div>
		<?php endwhile;
	endif;
	?>

<?php get_footer(); ?>