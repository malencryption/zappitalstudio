<?php
/**
 * Template Name: Reputation Management
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
                
                <p>It’s important to know what people are saying about your business online and with our Reputation Manager, we make it easy to keep your eyes on it all.</p>

                <div class="left-content-img">
                    <img class="alignleft img-md" src="/wp-content/themes/leesa/images/well_dressed_man_smiling_business_holding_phone.jpg" alt="well dressed man smiling business holding phone" />
                    <div>
                        <h3>When it comes to your reputation, <span class="green-text">visibility is key.</span></h3>
                        
                        <p><strong>71%</strong> of consumers say they’re more likely to use a business that has responded to their existing reviews. <span class="caption">(BrightLocal)</span><br><strong>95%</strong> of unsatisfied customers will return to a company if it manages to solve the issue quickly and efficiently. <span class="caption">(Social Media Today)</span></p>

                        <h3>What happens when you put this tool to work?</h3>

                        <p>You: make sure negative comments never slip through the cracks.</p>

                        <ul>
                            <li>Save time managing your reputation on multiple platforms.</li>
                            <li>Boost engagement with your customers online</li>
                        </ul>
                    </div>
                </div>
                <p>Don't miss a thing on these <span class="green-text">platforms.</span></p>

                <h3>You're three steps away from <span class="green-text">shaping your own reputation.</span></h3>

                <ol>
                    <li>Connect your social accounts.</li>
                    <li>View and respond to comments, all in one place.</li>
                    <li>Share the positivity by posting comments to your social media platforms.</li>
                </ol>
                <div class="left-content-img">
                    <img class="alignleft img-md" src="/wp-content/themes/leesa/images/reputation_manager_ss.png" alt="well dressed man smiling business holding phone" />
                    <div>
                        <h3>Benefit from the power of our <span class="green-text">A.I. Sentiment Engine.</span></h3>

                        <ul>
                            <li>A.I. Identifies the sentiment of each comment and gives you a Happiness Score. See how you're doing online with a single look.</li>
                            <li>Filter your feed so negative comments that require your attention always appear on top.</li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>

<?php endwhile;
endif;
?>
<?php get_footer(); ?>