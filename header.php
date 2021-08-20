<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eviation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap CSS only -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/gco2fnj.css">

	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<?php if ( is_front_page() ) : ?>
		<header class="dark">
	<?php else : ?>
		<header>
	<?php endif; ?>
			<div class="container-fluid">
				<nav class="nav nav-masthead">
					<div class="px-lg-5 mr-auto">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
							<svg width="85.104" height="68.411" viewBox="0 0 85.104 68.411">
								<g transform="translate(-110 -65)"><g transform="translate(110 65)"><path class="a" d="M291.478,367.105c-.421.783-1.486,2.643-3.1,5.445-4.592,7.95-12.164,20.858-12.164,20.858-1.421,2.439-3.738,2.434-5.15-.012l-21.332-40.928c-.391-.6-.064-1.229.81-.189,0,0,2.337,2.713,12.851,9.594,17.858,11.689,24.074,8.164,27.107,5.473.215-.192.316-.289.572-.553s.632-.1.411.31" transform="translate(-230.872 -351.725)"/><g transform="translate(0 58.425)"><path class="a" d="M218.226,472.182h-5.042v2.51h4.469v1.517h-4.469V478.8h5.106v1.517h-6.672v-9.655h6.608Z" transform="translate(-211.618 -470.5)"/><path class="a" d="M241.609,470.665H243.3l-3.705,9.724h-1.375l-3.705-9.724h1.731l2.687,7.421Z" transform="translate(-223.237 -470.5)"/><path class="a" d="M263.828,470.665v9.655h-1.566v-9.655Z" transform="translate(-237.315 -470.5)"/><path class="a" d="M284.592,480.249h-1.655l-.9-2.331h-4.215l-.917,2.331h-1.6l3.922-9.724h1.452Zm-4.673-7.7-1.528,3.862h3.069Z" transform="translate(-243.928 -470.428)"/><path class="a" d="M304.623,480.32h-1.579v-8.083h-2.827v-1.572h7.232v1.572h-2.827Z" transform="translate(-256.573 -470.5)"/><path class="a" d="M326.477,470.665v9.655h-1.566v-9.655Z" transform="translate(-269.103 -470.5)"/><path class="a" d="M343.544,480.315a5,5,0,1,1,4.673-5.007A4.726,4.726,0,0,1,343.544,480.315Zm0-8.427a3.162,3.162,0,0,0-3,3.421,3.206,3.206,0,0,0,3.031,3.448,3.162,3.162,0,0,0,3-3.421A3.206,3.206,0,0,0,343.544,471.888Z" transform="translate(-276.198 -470.329)"/><path class="a" d="M374.842,470.665h1.54v9.655h-1.311l-4.915-6.869v6.869h-1.54v-9.655h1.452l4.775,6.676Z" transform="translate(-291.278 -470.5)"/></g></g></g>
							</svg>
						</a>
					</div>
					
					<a href="#" class="mobile-nav"></a>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							//'menu_class'        => 'dark',
						)
					); ?>
				</nav>
			</div>
		</header>