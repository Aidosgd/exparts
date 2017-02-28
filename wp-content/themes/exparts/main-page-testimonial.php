<section class="Testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="toppartline">
                    <h2>Our Testimonial </h2>
                    <p class="headingtext">Ipsum dolor sit amet, consectetuer adipiscing elit consectetuer</p>

                </div>

            </div>
        </div>

        <div class="row Testicont">
            <?php
            $args = array(
                'post_type' => 'testimonial',
                'order'   => 'ASC',
            );
            $loop = new WP_Query($args);
            if($loop->have_posts()) {
                $term = $wp_query->queried_object;
                while($loop->have_posts()) : $loop->the_post();
                    $pod = pods('testimonial', $loop->post->ID);
                    $testimonial_text = $pod->field('testimonial-text');
                    $testimonial_name = $pod->field('testimonial-name');
                    $testimonial_position = $pod->field('position');
                    $img= $pod->field('avatar');
                    $img= wp_get_attachment_image_src($img['ID'], 'large');
                    $img= $img[0];
                    ?>
                    <div class="col-md-4 Testi-container">
                        <div class="text-cont"><?php echo $testimonial_text ?></div>
                        <div class="testi-profile row">
                            <div class="col-md-4"><img src="<?php echo $img ?>"
                                                       class="img-circle author-img"></div>
                            <div class="col-md-8">
                                <p class="author"><?php echo $testimonial_name ?></p>
                                <p class="author-degi"><?php echo $testimonial_position ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            }
            ?>
        </div>

    </div>

</section>