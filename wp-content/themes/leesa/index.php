<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="fw-page">
	<div class="fw-image">
		<div class="sectionTitle">
			<?php 
				if (is_search()) {
					echo '<h2>Search Results for "<em>';
					echo the_search_query();
					echo '</em>"</h2>';
				} else {
					echo '<h2>All Blog Posts</h2>';
				}
			?>
		</div>
	</div>
	<div class="container">
		<div class="sidebarLayoutContainer">
			<div class="sidecontent">
				<?php
					if ( have_posts() ) { ?>
						<div class="postPreviewContainer">
							<?php while ( have_posts() ): the_post(); ?>

								<div class="postPreview">
									<a href="<?php the_permalink() ?>">
										<div class="postFeatImg"><?php the_post_thumbnail('medium') ?></div>
										<div class="postTitle"><?php the_title();?></div>
										<div class="postDate"><?php echo get_the_date() ?></div>
										<div class="postExcerpt"><?php the_excerpt();?></div>
									</a>
								</div>
				
							<?php endwhile; ?>
						</div>
						<?php the_posts_pagination( array(
							'prev_text' => __( '&laquo;' ),
							'next_text' => __( '&#187;' ),
						)); ?>
					<?php } else {
						if (is_search()) {
							echo '<h3>No Results Found for "<em>';
							echo the_search_query();
							echo '</em>"</h3>';

							get_template_part( 'template-parts/featuredPostsByCategory' );
						}
					}
					?>
				</div>
			<?php get_sidebar() ?>
		</div>
 	</div>
</div>
<?php get_footer(); ?>