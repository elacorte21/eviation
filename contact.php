<?php
/**
 * Template Name: Contact Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="contact">
<div class="clouds">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 contactLeft">
				<div class="px-lg-5">
					<h2>Contact</h2>
					<h6 class="mt-5">United States Office</h6>
					<p>6724 185th Ave NE, Redmond, WA 98052, United States</p>
					<h6 class="mt-3">Israel Office</h6>
					<p>2 Ha’Ofe St. Qadima, Israel 60920</p>
					<h6 class="mt-3">General Information</h6>
					<p>info@eviation.co</p>
					<h6 class="mt-3">Media Relations</h6>
					<p>eviation@missionc2.com</p>
				</div>
            </div>
            <div class="col-lg-8">
				<div class="map">
					<a href="#" class="pin p1"><span>US-WA</span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-map-pin.svg"></a>
					<a href="#" class="pin p2"><span>ISR</span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-map-pin.svg"></a>
					<img src="<?php echo get_template_directory_uri(); ?>/images/map-contact.svg">
				</div>
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>

</body>
</html>