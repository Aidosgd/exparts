<section class="OurMainServices-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="toppartline">
                    <a href="#" class="btn pull-right">More Servies</a>
                    <h2>Our Main Services</h2>
                    <p class="headingtext">Ipsum dolor sit amet, consectetuer adipiscing elit consectetuer</p>

                </div>

            </div>
            <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => '2',
                'order'   => 'ASC',
            );
            $loop = new WP_Query($args);
            if($loop->have_posts()) {
                $term = $wp_query->queried_object;
                $post_idx = 0;
                while($loop->have_posts()) : $loop->the_post();
                    $pod = pods('services', $loop->post->ID);
                    $title = $pod->field('title');
                    $content = $pod->field('content');
                    $img= $pod->field('image');
                    $img= wp_get_attachment_image_src($img['ID'], 'large');
                    $img= $img[0];
                    ?>
                    <div class="col-md-6 col-sm-12 OurMainServices-<?php echo ++ $post_idx % 2 ? 'Left' : 'right'; ?>">
                        <div class="body-panel">
                            <div class="col-sm-3">
                                <div class="thumbnail"><img src="<?php echo $img ?>">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h4><?php echo $title ?></h4>
                                <p><?php echo $content ?></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <?php endwhile; } ?>

        </div>

    </div>

</section>