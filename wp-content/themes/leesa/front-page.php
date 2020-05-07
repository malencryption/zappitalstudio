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

<!-- <div id="leverage">
	<div class="container">
		<div class="sectionTitle">
			<h2>Leverage Technology to Improve Your Business & Lifestyle</h2>
		</div>
		<div class="body">
			<p>The possibilities are endless. Here are just a few ways you could use a custom web app to orchestrate success in life and business:</p>
			<ul>
				<li>Grow and nuture your audience</li>
				<li>Automate processes</li>
				<li>Keep track of inventory</li>
				<li>Book Appointments</li>
				<li>Organize Systems of Operation</li>
				<li>Increase Speed and Efficiency</li>
			</ul>
			
			<div class="btn-cont"><a href="" class="btn btn-green">Request an App!</a></div>
		</div>
	</div>
</div> -->

<div id="testimonials">
	<div class="container"></div>
</div>

<!-- <div id="joinNewsletter" class="container">
	<div class="sectionTitle">
		<h2>Stay Informed</h2>
	</div>
	<div class="body">
		<p>Join our newsletter to receive updates on free resources and education for your business!</p>
		<form class="form-inline">
			<input type="email" name="email" placeholder="Enter Your Email Address">
			<button type="submit" class="btn btn-green">Subscribe</button>
		</form>
	</div>
</div> -->
<div class="container">
	<div class="sidebarLayoutContainer">
		<!-- include sidebar -->
		<?php get_sidebar() ?>
		<div class="sidecontent">
		
			<?php 

			$exclude = get_category_by_slug('uncategorized');

			$args = array(
				'orderby' => 'name',
				'order' => 'ASC',
				'parent' => 0,
				'exclude' => array($exclude)
			  );
			  $categories = get_categories($args);
			?>

			<?php foreach ($categories as $cat) { ?>	
				<div class="categoryRecentPosts">
					<h2 class="featPostTitle">Featured Posts in <?php echo $cat->name  ?></h2>
					<div><?php echo $cat->description  ?></div>
					<div class="postPreviewContainer">
						<?php
						$args = array(
							'posts_per_page' => 3,
							'category_name' => $cat->name,
						);
						?>

						<?php
						$the_query = new WP_QUERY($args);
						while ($the_query -> have_posts()) : $the_query -> the_post();
							?>
							<div class="postPreview">
								<a href="<?php the_permalink() ?>">
									<div class="postFeatImg"><?php the_post_thumbnail('medium') ?></div>
									<div class="postTitle"><?php the_title();?></div>
									<div class="postDate"><?php echo get_the_date() ?></div>
									<div class="postExcerpt"><?php the_excerpt();?></div>
								</a>
							</div>
						<?php endwhile;
						wp_reset_postdata();
						?>

					</div>
					<a class="btn btn-teal btnicon" href="/category/<?php echo $cat->slug?>">See All <?php echo $cat->name ?> Posts <i class="material-icons right">chevron_right</i></a>
				</div>
			<?php } ?>
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