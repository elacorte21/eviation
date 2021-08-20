<?php
/**
 * Template Name: Careers List Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="careers">
	<div class="container-fluid">
		<div class="row justify-content-center">
			
			<?php
			// get the currently queried post
//			$career_post = get_queried_object();
			?>
			<div class="col-8">
				<h2><?php the_title(); ?></h2>
				<h4><?php echo $career_location; ?></h4>
				
				<a href="#" class="btn">BACK TO POSITIONS</a>
				
				<?php the_content(); ?>
				
				<?php wp_reset_postdata(); ?>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>

</body>
</html>