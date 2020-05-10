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
                'posts_per_page' => 4,
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