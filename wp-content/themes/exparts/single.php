<?php get_header(); ?>

<div id="MainBodycontainer">
	<section id="InnerPageContainer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Blog Post -->
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="toppartline">
						<h2><?php the_title(); ?></h2>
						<p class="headingtext">by <a href="#"><?php the_author() ?></a></p>
						<!-- Date/Time -->
						<div class="dateandtime col-sm-6 pull-right">
							<span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('F jS, Y') ?>
						</div>
					</div>
				</div>

				<div class="col-lg-8 InnerPage-text" id="BlogDetails">
					<hr>

					<!-- Preview Image -->
					<img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="">

					<hr>

					<!-- Post Content -->
					<p class="lead">
						<?php the_content(); ?>
					</p>

					<hr>

					<!-- Blog Comments -->
					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				<?php endwhile; // end of the loop. ?>

				</div>

				<div class="col-md-4" id="BlogDetailsRight">

					<!-- Blog Search Well -->
<!--					<div class="well">-->
<!--						<h4>Blog Search</h4>-->
<!--						<div class="input-group">-->
<!--							<input type="text" class="form-control">-->
<!--                        <span class="input-group-btn">-->
<!--                            <button class="btn btn-default" type="button">-->
<!--								<span class="glyphicon glyphicon-search"></span>-->
<!--							</button>-->
<!--                        </span>-->
<!--						</div>-->
<!--						<!-- /.input-group -->
<!--					</div>-->

					<!-- Blog Categories Well -->
<!--					<div class="well">-->
<!--						<h4>Blog Categories</h4>-->
<!--						<div class="row">-->
<!--							<div class="col-lg-12">-->
<!--								<ul class="list-group">-->
<!--									<li class="list-group-item"><a href="#">Category Name</a></li>-->
<!---->
<!--									<li class="list-group-item"><a href="#">Category Name</a></li>-->
<!---->
<!--									<li class="list-group-item"><a href="#">Category Name</a></li>-->
<!---->
<!--									<li class="list-group-item"><a href="#">Category Name</a></li>-->
<!---->
<!--									<li class="list-group-item"><a href="#">Category Name</a></li>-->
<!---->
<!--								</ul>-->
<!--							</div>-->
<!---->
<!--						</div>-->
<!--						<!-- /.row -->
<!--					</div>-->

					<!-- Side Widget Well -->
<!--					<div class="well">-->
<!--						<h4>Side Widget Well</h4>-->
<!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>-->
<!--					</div>-->

				</div>


			</div>
		</div>




	</section>
<?php get_footer(); ?>