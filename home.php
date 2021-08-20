<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="home" class="panel one dk-bg" data-section-name="Pure-Electric" data-slide="0">

    <div class="clouds">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-6 order-lg-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-home.png" width="100%" class="hero">
                </div>
                <div class="col-xl-5 col-lg-6 order-lg- home-left text-center">
                    <div class="pl-lg-5">
                        <h1><img src="<?php echo get_template_directory_uri(); ?>/images/txt-alice.svg" width="400"></h1>
                        <h2 class="mb-4 pure-electric">Pure Electric</h2>
                        <p>Meet Alice, the world’s first all-electric<br>
                        commuter aircraft.</p>
                        <p class="mb-4">Built to make flight the sustainable, affordable,<br>
                        quiet solution to regional travel.</p>
                        <ul class="home-data">
                            <li>
                                <span>9</span>
                                PAX
                            </li>
                            <li>
                                <span>220</span>
                                KTS
                            </li>
                            <li>
                                <span>440</span>
                                NM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-news" class="panel lt-bg" data-section-name="Eviation-in-the-News" data-slide="1">
    <div class="homeNews">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 home-news-left">
                    <h3>Eviation<br>
                    in the News</h3>
                    <a href="news" class="btn">VIEW MORE</a>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="home-news owl-carousel">

                    <?php query_posts( 'category_name=news&posts_per_page=6' ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="news-content">
                                <a href="<?php echo post_custom( 'link' ) ; ?>" target="_blank">
                                    <?php the_post_thumbnail() ?>
                                    <?php
									if ( has_tag( 'awards' ) ) {
									?>
										<img class="news-awards-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-award.png">
									<?php
									}
									?>
                                    <span>
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </span>
                                    <h6><?php the_date( 'j F Y' ); ?></h6>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</section>

</body>
</html>