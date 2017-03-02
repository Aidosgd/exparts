<?php
/*
Template Name: Contact page
*/
?>
<?php get_header(); ?>
	<div id="MainBodycontainer">

		<section id="InnerPageContainer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="toppartline">
							<?php $contact = get_post( 104 ); ?>
							<h2><?php echo  $contact->post_title ?></h2>
							<p class="headingtext">an international social network in rome for expatriates</p>
						</div>
					</div>

					<div class="col-lg-12 InnerPage-text">
						<div class="container Contactbanner">
							<div class="row">
								<div class="col-md-6">
									<h3>Map</h3>

									<div class="Mapcontent">

										<?php echo  $contact->post_content ?>

										<div class="panel-body">
											&nbsp;
										</div>

									</div>


								</div>

								<div class="col-md-6">



									<div class="form-area-cont">
										<h3>Please fill up the contact form  </h3>
										<div class="form-area">
											<?php echo do_shortcode( '[contact-form-7 id="108" title="Contact form 1"]' ); ?>
										</div>
									</div>

								</div>

								<div class="clearfix"></div>

							</div>

						</div>


					</div>


				</div>
			</div>

<?php get_footer(); ?>