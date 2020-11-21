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
<div class="container">
	<h2>Services We Provide</h2>

	<ul class="d-flex" id="serviceItems">
  		<li class="service-item">
		  	<i class="material-icons">verified_user</i>
			<h3>Reputation Management</h3>
  		</li>
  		<li class="service-item">
			<i class="material-icons">today</i>
			<h3>Social Media Marketing</h3>
  		</li>
  		<li class="service-item">
			<i class="material-icons">important_devices</i>
			<h3>Web Design & Development</h3>
  		</li>
		<li class="service-item">
			<i class="material-icons">developer_mode</i>
			<h3>Application Development</h3>
  		</li>
  		<li class="service-item">
			<i class="material-icons">format_align_center</i>
			<h3>SEO + Content Marketing</h3>
  		</li>
  		<li class="service-item">
			<i class="material-icons">trending_up</i>
			<h3>PPC + Advertising Mangement</h3>
  		</li>
	</ul>
</div>
<div id="digital-report-card-banner">
	<div class="container">
		<h2>Get Your FREE Digital Report Card!</h2>
		<div class="cml_partner_marketing_form" data-widgettitle="Complete the following form to see how well your business is doing online!" data-widgetfl="1|1|First Name|Last Name|1" data-widgetbn="1|2|Business Name|1" data-widgetweb="1|3|Website URL|1" data-widgetemail="1|4|Email|1" data-widgetphone="1|5|Phone Number|1" data-widgetaddr="1|6|Address|1" data-widgetcta="1|7|Submit|#02a259|#FFFFFF" data-widgetrpemail="hello@zappitalstudio.com" data-widgetrpuser="1" data-widgetrpblocks="listings|reviewshealth|socialreach|seo|mobile|" data-widgetrpcta="Get Started|https://my.zappitalstudio.marketing/signup|1|0|#02a259|#FFFFFF" data-widgetpartnerid="80b095c0-bd07-4c56-93c8-73be5dc91dca" data-sitereport="https://reportcard.zappitalstudio.marketing" data-widgetapikey="3/NqCboIROjVgfulKbZ0bVwrh/i0Wz32hhW6+DSYk+g=" data-widgetapiurl="https://api.cml.ai/v1"></div>
	<script class="cml_partner_widget_script" type="text/javascript" src="https://d25bp99q88v7sv.cloudfront.net/0valez8psitwndm/embed/_js/rp/marketingform.js"></script>
	</div>
</div>
<div class="container">
	<div class="sidebarLayoutContainer">
		<!-- include sidebar -->
		<?php get_sidebar() ?>
		<div class="sidecontent">
		
			<?php get_template_part( 'template-parts/featuredPostsByCategory'); ?>
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