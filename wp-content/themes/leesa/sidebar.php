<div class="sidebar">
    <h2>Follow Us!</h2>
    <div class="social-follows">
        <?php get_template_part('social-media-menu') ?>
    </div>
    <?php 
        if (!is_page('about-us')) {
    ?>
    <h2>About the Author</h2>

    <div class="authorImage"><img src="http://zappitalstudio.com/wp-content/uploads/2020/03/leesa-ruzicka-profile-picture.png" alt="" class="size-medium wp-image-2048 alignnone mr-4"></div>
    
    <p>Leesa graduated with a Bachelor’s Degree in Web Design and Development from BYU Idaho. In addition to her degree, she got her cosmetology license and worked in salons, managing business operations, and marketing along with providing services. She worked professionally as a software and web developer for over five years. Beyond working for companies remotely and in office positions, she has done contract work, freelance work, and has now switched to focus on running her own business, teaching as a bootcamp instructor, and developing independant projects.</p>
    
    <div><a class="readMoreLink" href="/about-us">Read More >></a></div>

    <?php } ?>

    <!-- Begin Mailchimp Signup Form -->
    <div id="mc_embed_signup">
        <div class="signupImage"><img alt="sign up for our newsletter" src="/wp-content/uploads/2020/05/StockSnap_ARKITT7DVA-scaled.jpg" /></div>
        <form action="https://zappitalstudio.us14.list-manage.com/subscribe/post?u=adab9e3f807df5f95f3568858&amp;id=0754d24cb1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                <h2>Sign Up For Our Weekly Newsletter</h2>
                <p class="signupDescription">Don't miss out on free resources and opportunities to collaborate!</p>
                <div class="indicates-required"><span class="asterisk">*</span>required</div>
                <div class="mc-field-group form-group">
                    <label for="mce-FNAME">First Name  <span class="asterisk">*</span></label><br />
                    <input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
                </div>
                <div class="mc-field-group form-group">
                    <label for="mce-EMAIL">Email <span class="asterisk">*</span></label><br />
                    <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_adab9e3f807df5f95f3568858_0754d24cb1" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-teal"></div>
            </div>
        </form>
    </div>

    <!--End mc_embed_signup-->

    <?php get_search_form() ?>

    <div class="sidebarCategories">
        <h3 class="bordered">Categories</h3>
        <div class="linkBlocks">
        <?php
            $exclude = get_category_by_slug('uncategorized');
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC',
                'exclude' => array($exclude)
            ) );

            foreach( $categories as $category ) {
                $category_link = sprintf( 
                    '<a class="linkBlock btn" href="%1$s" alt="%2$s">%3$s</a>',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                    esc_html( $category->name )
                );
                
                echo $category_link;
            } 
        ?>
        </div>
    </div>
    <div class="sidebarTags">
        <h3 class="bordered">Tags</h3>
        <div class="linkBlocks">
            <?php
            $tags = get_tags();
            if ( $tags ) :
                foreach ( $tags as $tag ) : ?>
                    <a class="linkBlock btn" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>