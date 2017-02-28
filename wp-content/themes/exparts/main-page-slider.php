<section id="slides">
    <div class="slides-container">
        <?php
        $args = array(
            'post_type' => 'sliders',
            'order'   => 'ASC',
        );
        $loop = new WP_Query($args);
        if($loop->have_posts()) {
            $term = $wp_query->queried_object;
            while($loop->have_posts()) : $loop->the_post();
                $pod = pods('sliders', $loop->post->ID);
                $field = $pod->field('text');
                $img= $pod->field('slide');
                $img= wp_get_attachment_image_src($img['ID'], 'large');
                $img= $img[0];
                ?>
                <div>
                    <img src="<?php echo $img ?>" alt="">
                    <div id="color-overlay"></div>
                    <div class="carousel-caption">
                        <div class="carousel-caption-cont">
                            <?php echo $field; ?>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        }
        ?>
    </div>
</section>