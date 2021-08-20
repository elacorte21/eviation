<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eviation
 */

?>

<footer>
	<div class="container-fluid">
		<div class="row px-lg-5">
			<div class="col-lg-3 col-md-4 col-9">
				<div class="row">
					<div class="col-lg-6 col-5">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company">Company</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>aircraft">Aircraft</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>careers">Careers</a></li>
						</ul>
					</div>
					<div class="col-5">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news">News</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-kit">Media Kit</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-auto order-md-3">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="62" alt="<?php bloginfo( 'name' ); ?>" /></a>
			</div>
			<div class="col-lg-2 col-md-3 col-6 order-md-2 mr-auto">
				<a href="https://www.facebook.com/EviationAircraft/" target="_blank" class="mr-1"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-fb.svg" alt="Facebook" width="22" /></a>
				<a href="https://il.linkedin.com/company/eviation-aircraft-ltd" target="_blank" class="mr-1"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-in.svg" alt="LinkedIn" width="22" /></a>
				<a href="https://twitter.com/eviationaero" target="_blank" class="mr-1"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tw.svg" alt="Twitter" width="22" /></a>
				<a href="https://www.youtube.com/channel/UC8rr4q717HUrQHiIES6DcaQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-yt.svg" alt="YouTube" width="22" /></a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollify.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>

