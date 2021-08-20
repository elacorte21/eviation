<?php
/**
 * Template Name: News Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="news">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>Eviation in the News</h2>
                <div class="row">
                <?php 
					query_posts( 'category_name=news&posts_per_page=-1' );
                    while ( have_posts() ) : the_post(); 
					?>
                    <div class="col-md-4">
                        <div class="item">
                            <a href="<?php echo post_custom( 'link' ) ; ?>" target="_blank">
                                <?php the_post_thumbnail() ?>
                                <?php
								if ( has_tag( 'awards' ) ) {
								?>
									<img class="news-awards-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-award.png">
								<?php
								}
								?>
                                <h4><?php the_title(); ?></h4>
                                <h6><?php the_date( 'j F Y' ); ?></h6>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>

</body>
</html>