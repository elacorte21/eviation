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
		<div class="row">
			
			<div class="col-12 text-center">
				<h2 class="" style="margin-top: 25vh"><?php echo strtoupper(str_replace('careers-', '', $career_location) ); ?> Positions</h2>
			</div>
			
			<div class="col-lg-4 careersLeft">
				<div class="px-lg-5">
					<?php
					// display list of categories from current country that has job posting.
					
					// get the currently queried taxonomy term, for use later in the template file
					//$career_location = get_queried_object();

					// get current career category slug
					$career_category_slug = get_queried_object()->slug;		

					// getting post ids that are assigned to current taxonomy term
					$career_post_IDs = get_posts(array(
						'post_type' => 'career',
						'posts_per_page' => -1,
						'tax_query' => array(
											array(
												'taxonomy' => 'career_location',
												'field' => 'slug',
												'terms' => $career_location
												)
											),
						'fields' => 'ids'
					));

					// getting the terms of 'career_category', which are assigned to these posts
					$career_category = wp_get_object_terms($career_post_IDs, 'career_category');
					foreach( $career_category as $category ){
					?>
						<a href="<?php echo esc_url( site_url("careers/".$career_location."/".$category->slug) ); ?>">
							<h5><?php echo $category->name; ?></h5>
						</a>
					<?php
					}
					wp_reset_postdata();
					?>
                </div>
            </div>

			<div class="col-lg-7">
			<?php
			query_posts( 'post_type=career&posts_per_page=-1' );
			while ( have_posts() ) : the_post(); 
				if ( has_term( $career_location , 'career_location' ) ) {
					if ( has_term( $career_category_slug , 'career_category' ) ) {
			?>
				<div class="row">
					<a href="<?php the_permalink(); ?>" class="col-12">
						<div class="col-12 py-3 border border-top-0 border-left-0 border-right-0">
							<div class="row">
								<div class="col-11 p-0">
									<h4><?php the_title(); ?></h4>
									<p><?php echo $career_location; ?></p>
								</div>
								<div class="col-1 p-0 d-flex align-items-center">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-next.svg">
								</div>
							</div>
						</div>
					</a>
                </div>
			<?php
					}
				}
			endwhile;
			wp_reset_postdata();
			?>
            </div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>

</body>
</html>