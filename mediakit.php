<?php
/**
 * Template Name: Media Kit Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="mediakit">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-5 col-lg-5 mt-2 fadeInUp1">
				<div class="px-lg-5">
					<h2>Eviation<br>
					Media Kit</h2>
					<a href="https://eviationltd-my.sharepoint.com/:u:/g/personal/admin_eviationltd_onmicrosoft_com/EfYHEWShA4xCk4jdZr-3ppQB0_LIJqp_ecbZC6_Sg-eAeA?download=1" class="btn" target="_blank">DOWNLOAD KIT</a>
				</div>
			</div>
			<div class="col-lg-6 fadeIn1">
				<div class="owl-carousel mediakit">
					<div class="item">
						<div class="embed-responsive embed-responsive-16by9 play-video">
							<button class="btn-play border-0">
								<span></span> Watch the full film
							</button>
							<video class="embed-responsive-item" poster="<?php echo get_template_directory_uri(); ?>/images/bg-video.jpg">
							<!-- <source src="<?php //echo get_template_directory_uri(); ?>/videos/Eviation-Le-Bourget-Short2-1.m4v" type="video/mp4">-->
								<source src="https://www.eviation.co/wp-content/uploads/2019/08/Eviation-Le-Bourget-Short2-1.m4v" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-media-kit-1.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-media-kit-2.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-media-kit-3.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-media-kit-4.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-media-kit-5.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</section>

















</body>
</html>