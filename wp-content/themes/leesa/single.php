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
				<div class="sidebarLayoutContainer">
					<div class="sidecontent">
						<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
						<div class="post-thumbnail"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></div>
						<div class="post-meta">
							<span class="post-date"><?php echo get_the_date(); ?></span>
							<span class="post-author"> by <?php the_author() ?></span>
							<span class="separator">-</span>
							<span class="commentsLink">
								<a href="#comments">
								<?php 
									$numComments = get_comments_number(get_the_ID()); 
									
									if ($numComments > 0) { 
										if ($numComments === 1) { ?>
										1 Comment
										<?php } else { 
											echo $numComments ?> Comments
										<?php }?>
									<?php } else { ?>
										Be the first to comment
									<?php }
								?>
								</a>
							</span>
						</div>
						<div class="page-content"><?php the_content(); ?></div>

						<?php
							$tags = get_the_tags(get_the_ID());
							if ( $tags ) : ?>
								<div class="postTags">
									<div class="tagsTitle">Tags on this Post: </div>
									<div class="linkBlocks">
										<?php foreach ( $tags as $tag ) : ?>
											<a class="linkBlock btn" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
										<?php endforeach; ?>
									</div>
								</div>	
							<?php endif; ?>
						<?php comments_template( '', true ); ?>

						<?php
						$related = ci_get_related_posts( get_the_ID(), 4 );

						if ( $related->have_posts() ):
							?>
							<div class="related-posts">
								<h3 class="bordered">You May Also Like</h3>
								<div class="postPreviewContainer">
									<?php while ( $related->have_posts() ): $related->the_post(); ?>
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
							</div>
							<?php
						endif;
						wp_reset_postdata();
						?>

					</div>
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>
		<?php endwhile;
	endif;
	?>

<?php get_footer(); ?>