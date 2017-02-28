<section class="EventsPhotos-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="toppartline">
                    <a href="#" class="btn pull-right">More Events Photos</a>
                    <h2>Our Main Services</h2>
                    <p class="headingtext">Meetup NOV 8, 2016</p>

                </div>

            </div>
        </div>
    </div>

    <section class="slider">
        <div class="flexslider carousel">
            <ul class="slides">
                <?php
                $args = array(
                    'post_type' => 'main_gallery',
                    'order'   => 'ASC',
                );
                $loop = new WP_Query($args);
                if($loop->have_posts()) {
                    $term = $wp_query->queried_object;
                    while($loop->have_posts()) : $loop->the_post();
                        $pod = pods('main_gallery', $loop->post->ID);
                        $img= $pod->field('image');
                        $img= wp_get_attachment_image_src($img['ID'], 'large');
                        $img= $img[0];
                        ?>
                        <li>
                            <img src="<?php echo $img ?>"/>
                        </li>
                        <?php
                    endwhile;
                }
                ?>
            </ul>
        </div>
    </section>

</section>