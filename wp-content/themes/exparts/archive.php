<?php get_header(); ?>

<!--MainBodycontainer-->

<div id="MainBodycontainer">

<section id="InnerPageContainer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="toppartline">
					<h2>BLOG &amp; PRESS</h2>
					<p class="headingtext">an international social network in rome for expatriates</p>


				</div>
			</div>

			<div class="col-lg-12 InnerPage-text">


				<div class="row BlogCont">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-6">
								<div class="list-group-item">
									<div class="row">
										<div class="col-sm-4">
											<img src="<?php the_post_thumbnail_url() ?>" class="img-responsive">
										</div>
										<div class="col-sm-8 textpanel">
											<h4 class="media-heading"> <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h4>
											<p class="text-author">By <?php the_author_posts_link() ?></p>
											<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...') ?></p>
										</div>
									</div>
									<ul class="list-inline list-unstyled datetime">
										<li><span><i class="glyphicon glyphicon-calendar"></i> <?php the_time('F jS, Y') ?> </span></li>
										<li>|</li>
										<span><i class="glyphicon glyphicon-comment"></i> <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed'); ?></span>
<!--										<li>|</li>-->
<!--										<li>-->
<!--											<span class="glyphicon glyphicon-star"></span>-->
<!--											<span class="glyphicon glyphicon-star"></span>-->
<!--											<span class="glyphicon glyphicon-star"></span>-->
<!--											<span class="glyphicon glyphicon-star"></span>-->
<!--											<span class="glyphicon glyphicon-star-empty"></span>-->
<!--										</li>-->
<!--										<li>|</li>-->
<!--										<li>-->
<!--											<!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
<!--											<span><i class="fa fa-facebook-square"></i></span>-->
<!--											<span><i class="fa fa-twitter-square"></i></span>-->
<!--											<span><i class="fa fa-google-plus-square"></i></span>-->
<!--										</li>-->
									</ul>
								</div>
							</div>
						<?php endwhile;
								else: ?>
						<p>Sorry, no posts matched your criteria.</p>


						<?php endif; ?>
				</div>

			</div>


		</div>
	</div>




</section>

<?php get_footer(); ?>
