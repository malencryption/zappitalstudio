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
				<div class="postPreviewContainer">
				<?php
						if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
				
							<div class="postPreview">
								<a href="<?php the_permalink() ?>">
									<div class="postFeatImg"><?php the_post_thumbnail('medium') ?></div>
									<div class="postTitle"><?php the_title();?></div>
									<div class="postDate"><?php echo get_the_date() ?></div>
									<div class="postExcerpt"><?php the_excerpt();?></div>
								</a>
							</div>
				
						<?php endwhile;
					endif;
					?>
				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
 	</div>
</div>
<?php get_footer(); ?>