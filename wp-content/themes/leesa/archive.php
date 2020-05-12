<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="fw-page">
	<div class="fw-image">
		<div class="sectionTitle">
			<h2><?php echo get_the_archive_title() ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="sidebarLayoutContainer">
			<div class="sidecontent">
				<div><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></div>
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
						the_posts_pagination( array(
							'prev_text' => __( '&laquo;' ),
							'next_text' => __( '&#187;' ),
						));
					endif;
					?>
				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
 	</div>
</div>
<?php get_footer(); ?>