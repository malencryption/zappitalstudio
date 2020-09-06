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
            <div class="page-content">
                <?php the_content(); ?>
                <p>We're happy to help support you in growing your online business. Check out our services below!</p>

                <div id="services">
                    <h2>Tech Services</h2>
                    <div class="body">
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">important_devices</i></div>
                            <div class="text">
                                <h3>Web Site Development</h3>
                                <p>
                                    Optimize your online presence with a custom responsive web site,
                                    portfolio, or blog for your business.
                                </p>
                                <p>Our web site packages are ideal for:</p>
                                <ul>
                                    <li>
                                        Content creators, influencers, and brands focused on
                                        publishing content
                                    </li>
                                    <li>
                                        Video creators, vloggers, and live streamers
                                    </li>
                                    <li>Businesses doing online lead generation</li>
                                    <li>Service providers</li>
                                    <li>Digital Product Based Businesses</li>
                                </ul>

                                <div>
                                    <a class="btn btn-teal btn-icon" href="/web-development-packages">View Our Web Site Packages <i class="material-icons right">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">code</i></div>
                            <div class="text">
                                <h3>Custom Development</h3>
                                <p>Whether you are starting with an idea or an existing project, we are happy to offer custom development work. We can develop custom applications, WordPress themes and plugins, membership and course platforms, and storefronts, or customize what you already have to meet your needs.</p>
                                
                                <ul>
                                    <li>Web Applications</li>
                                    <li>WordPress Themes & Plugins</li>
                                    <li>Membership and Course Platforms</li>
                                    <li>Storefronts</li>
                                    <li>Upgrade your existing projects</li>
                                </ul>

                                <div>
                                    <a class="btn btn-teal btn-icon" href="/contact-us">Contact Us For Rates <i class="material-icons right">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2>Business & Marketing Consultations</h2>
                    <p>Not sure where to focus your efforts in growing your online business? Here are some of the areas you may consider consulting with us.</p>
                    
                    <div class="body">
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">timeline</i></div>
                            <div class="text"> 
                                
                                <h3>Digital Marketing Strategy</h3>
                                <p>Learn how to grow your audience with online content development, leveraging the power of social platforms.</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">language</i></div>
                            <div class="text">
                                
                                <h3>Online Business Strategy</h3>
                                <p>Turn your hobby, passion, knowledge, products, and services into an
                                online business.</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">assessment</i></div>
                            <div class="text">
                        
                                <h3>SEO, Analytics, and Site Auditing</h3>
                                <p>Looking to fine-tune your results? Consult with us to see how we can help you optimize your conversions.</p>

                                <a class="btn btn-teal btn-icon" href="/contact-us">Contact Us For Rates <i class="material-icons right">chevron_right</i></a>
                            </div>
                        </div>
                    </div>
                    
                    <h2>Digital Multimedia Resources</h2>
                    <div class="body">
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">archive</i></div>
                            <div class="text">
                                <h3>*Coming Soon!* Digital Downloads Library</h3>
                                <p>Looking for multimedia resources? Our digital downloads library is filled with content creation resources, branding, templates, and more!</p>

                                <!-- <div>
                                    <a class="btn btn-teal btn-icon" href="#">Digital Downloads Library <i class="material-icons right">chevron_right</i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">perm_media</i></div>
                            <div class="text">
                                <h3>Custom Media Creation</h3>
                                <p>Need custom resources or templates? If what you need isn't already in our <a href="">digital downloads library</a> make a request for something new or contact us about creating something just for you!</p>

                                <div>
                                    <a class="btn btn-teal btn-icon" href="/contact-us">Contact Us <i class="material-icons right">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2>Collaboration and Sponsorship Opportunities</h2>
                    <div class="body">
                        <div class="entry">
                            <div class="greenBubble"><i class="material-icons white">public</i></div>
                            <div class="text">
                                
                                <p>We are open to opportunities for collaborating with like minded, family friendly, individuals and brands. Please contact us if you have an idea you would like to work with us on!</p>

                                <div>
                                    <a class="btn btn-teal btn-icon" href="/contact-us">Contact Us <i class="material-icons right">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

<?php endwhile;
endif;
?>
<?php get_footer(); ?>