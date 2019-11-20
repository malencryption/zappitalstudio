<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="fw-page">
	<div class="fw-image">
		<div class="sectionTitle">
			<h2>Blog</h2>
		</div>
	</div>
	<div class="container">
		<div class="postsCol">
			<?php
				if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
		
					<div id="post-<?php the_ID(); ?>" class="postShort">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="date"><?php echo get_the_date(); ?></div>
						<div class="post-excerpt"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail' ); the_excerpt(); ?></div>
					</div>
		
				<?php endwhile;
			endif;
			?>
		</div>
		<div class="postsSidebar">
<!-- 			<div>Search</div>
			<h4>Popular Posts</h4>
			<h4>Categories</h4> -->
		</div>
 	</div>
</div>
<?php get_footer(); ?>