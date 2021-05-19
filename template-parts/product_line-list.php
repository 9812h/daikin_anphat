<div class="dk-pl-bg">
    <div class="container">
        <div class="w-75 mx-auto">
            <h3>Daikin Hydraulics Products</h2>
            <div class="row mb-lg-3">
            <?php
                $args = array(
                'post_type' => 'product_line',
                'post_status' => 'publish',
                'posts_per_page' => 8,
                'orderby' => 'title', 
                'order' => 'ASC', 
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    var_dump(get_post_meta($post->ID));?>   
                    <div class="col-lg-4 mb-3">
                        <div class="dk-el">
                            <a href="<?php echo get_post_permalink($post->ID); ?>">
                                <img src="<?php echo CFS()->get('small_image') ?>" alt="super unit" style="max-width: 100%;">
                                <div class="dk-el-body">
                                    <p>
                                    <?php echo CFS()->get('description'); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>	
                <?php endwhile;

                wp_reset_postdata();
            ?>
    </div>
</div>