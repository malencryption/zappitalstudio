<?php
/**
 *
 * @package Leesa
 */

get_header(); ?>
<div class="fw-image">
	<div class="main-title"	>
		<h1>Creative Web Applications</h1>
		<div class="subH1">Digital Solutions To Your Problems</div>
	</div>
</div>

<?php 
   // the query
	$the_query = new WP_Query( array(
		'posts_per_page' => 3,
		'post_status' => 'publish'
	)); 
?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="container">
		<div id="featured-posts">
			<div class="sectionTitle"><h2>Featured Posts</h2></div>
			<div class="body mb-4">
				<div class="row">

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<div class="col">
							<?php 
								if(has_post_thumbnail()){
                  					the_post_thumbnail();
								}
							?>
							<?php the_title(); ?>
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>

<?php else : ?>

<?php endif; ?>

<div id="leverage">
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
</div>

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