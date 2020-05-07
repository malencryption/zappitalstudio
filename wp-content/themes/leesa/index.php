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
						<div class="post-thumbnail"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail' ); ?></div>
						<div class="post-excerpt"><?php the_excerpt(); ?></div>
					</div>
		
				<?php endwhile;
			endif;
			?>
		</div>
		<div class="postsSidebar">
			<h4>Categories</h4>
			<div class="catBlocks">
			<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC'
				) );
 
				foreach( $categories as $category ) {
					$category_link = sprintf( 
						'<a href="%1$s" alt="%2$s">%3$s</a>',
						esc_url( get_category_link( $category->term_id ) ),
						esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
						esc_html( $category->name )
					);
					
					echo '<div class="catLinkBlock">' . $category_link . '</div>';
				} 
			?>
			</div>
		</div>
 	</div>
</div>
<?php get_footer(); ?>