<div class="flex">
    <div class="rightcontent-app-card">
        <div class="rightcontent-app-card-top">
            <h1><?php echo get_cat_name($category_id = 4); ?></h1>
            <hr>
            <div class="rightcontent-app-card-bottom">
                <div class="rightcontent-app-card-bottom__images">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </a>
                </div>
                <div class="rightcontent-app-card-bottom__box">
                    <?php
                    $CategoryBasket = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 99,
                        'cat'            => 4,
                    ));
                    ?>
                    <?php
                    while ($CategoryBasket->have_posts()) : $CategoryBasket->the_post();
                        ?>
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 999, ' ...'); ?></a>
                        </h3>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>