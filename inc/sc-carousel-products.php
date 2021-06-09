<?php

if(!function_exists('pl_carousel_products_func')){
    add_shortcode('pl_carousel_products', 'pl_carousel_products_func');

    function pl_carousel_products_func(){
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 9
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts()){
            
            ob_start();
            ?>
            <div class="pl-slick-products">
                <?php while($post_query->have_posts()): $post_query->the_post(); 
                    global $product;

                    $price = $product->get_price_html();
                    $limit_desc = get_the_excerpt();
                ?>
                    <div class="slick-item">
                        <div class="pl-card-product">
                            <?php the_post_thumbnail( 'medium', array('class' => 'pl-card-product__img') ) ?>
                            <div class="pl-card-product__info">
                                <span class="pl-card-product__info__price">
                                    <?php 
                                        echo $price; 
                                    ?>
                                </span>
                                <div class="pl-card-product__info__desc">
                                    <a href="<?php the_permalink() ?>" class="pl-card-product__info__desc__link"><h5 class="pl-card-product__info__desc__title"><?php the_title(); ?></h5></a>
                                    <p class="pl-card-product__info__desc__short">
                                        <?php echo excerpt(10); ?>
                                    </p>

                                    <?php
                                        $url_page_edit = "design-your-own";
                                    ?>

                                    <a href="<?php echo get_home_url() . "/" . $url_page_edit . "/design/" . $product->get_id(); ?>" class="pl-card-product__info__desc__button pl-design-button">
                                        <i class="fas fa-pen"></i>
                                        <span class="pl-design-button__text">Diseñar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_query();
            return ob_get_clean();
        }
    }
}
