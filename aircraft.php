<?php
/**
 * Template Name: Aircraft Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eviation
 */

get_header();
?>

<section id="commuter" class="panel dk-bg" data-section-name="Alice" data-slide="0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="commuter">
					<div class="commuter-img"></div>
					<a href="#" class="btn-commuter c1" data-name="System" data-desc1="The first entirely Fly-By-Wire FAR 23 airicraft" data-desc2=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg"></a>
					<a href="#" class="btn-commuter c2" data-name="Battery" data-desc1="820 kWh usable capacity" data-desc2="Comprises approx. 55% of the MTOW"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg"></a>
					<a href="#" class="btn-commuter c3" data-name="Lightweight" data-desc1="All-composite structure" data-desc2=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg"></a>
					<a href="#" class="btn-commuter c4" data-name="Tail Motor" data-desc1="Boundary layer ingestion, reduces drag" data-desc2="Capable of safely powering the plane in a wingtip emergency"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg"></a>
					<a href="#" class="btn-commuter c5" data-name="Wing Tip Motors" data-desc1="Self-balancing yaw" data-desc2="Counter vortex rotation and reduces induced drag"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg"></a>
				</div>
			</div>
		</div>
		<div class="row row-data">
			<div class="col-xl-5 offset-xl-3 col-lg-4 col-md-4 offset-lg-4 order-md-2">
				<div class="content">
					<h5 class="content-name"></h5>
					<div class="content-desc1"></div>
					<div class="content-desc2"></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 order-md-1">
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
</section>

<section id="takealook" class="panel lt-bg" data-section-name="Take-a-Look" data-slide="1">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-5 col-lg-5 col-md-8 mt-2 fadeInUp1">
				<div class="px-lg-5">
					<h6>Take a Look</h6>
					<h2 class="px-0">Inside<br>
					Alice</h2>
					<p>Think smaller planes lack luxury? Think again. Alice is designed from the ground up for a relaxing, comfortable regional commute.</p>
					<p>Due to the electric propulsion, the typical noise and vibrations you would hear and feel in other aircraft are dramatically reduced.</p>
					<p class="txt-blue"><strong>Quiet, sleek, and electric. <br>
					No compromises.</strong></p>
				</div>
			</div>
			<div class="col-lg-6 fadeIn1">

				<div class="owl-carousel acraft">
					<div class="item">
						<div class="embed-responsive embed-responsive-16by9 play-video">
							<button class="btn-play border-0">
								<span></span> Watch the full film
							</button>
							<video class="embed-responsive-item" poster="<?php echo get_template_directory_uri(); ?>/images/bg-video.jpg">
							<!-- <source src="<?php //echo get_template_directory_uri(); ?>/videos/Eviation-Le-Bourget-Short2-1.m4v" type="video/mp4">-->
								<source src="https://www.eviation.co/wp-content/uploads/2019/11/intirior-v5.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-Interior-1.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-Interior-2.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-Interior-3.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-Interior-4.jpg" alt=""></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-Interior-5.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="alicespecs" class="panel dk-bg" data-section-name="Alice-Specifications" data-slide="2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 fadeInUp2">
				<div class="px-lg-5">
					<h2 class="">Alice <span>Specifications</span></h2>
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-8">
							<hr>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-8">
							<table>
								<tr>
									<th colspan="2">Performance</th>
								</tr>
								<tr>
									<td width="40%">Cruise speed</td>
									<td><strong>220 kts</strong></td>
								</tr>
								<tr>
									<td>Takeoff field length</td>
									<td><strong>2,600 ft</strong></td>
								</tr>
								<tr>
									<td>Service Ceiling</td>
									<td><strong>32,000 ft</strong></td>
								</tr>
								<tr>
									<td>Range</td>
									<td><strong>440 NM (+45min IFR reserve)</strong></td>
								</tr>
							</table>

							<table>
								<tr>
									<th colspan="2">Battery</th>
								</tr>
								<tr>
									<td width="40%">Battery</td>
									<td><strong>820 kWh</strong></td>
								</tr>
								<tr>
									<td>Battery Chemistry</td>
									<td><strong>Lithium Ion (NMC)</strong></td>
								</tr>
								<tr>
									<td>Battery Weight</td>
									<td><strong>8,200 lbs | 3,720 kg</strong></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-4 col-md-8">
							<table>
								<tr>
									<th colspan="2">Characteristics</th>
								</tr>
								<tr>
									<td>Occupants</td>
									<td><strong>9 PAX (+2 crew)</strong></td>
								</tr>
								<tr>
									<td>Max payload</td>
									<td><strong>2,500 lbs | 1,134 kg</strong></td>
								</tr>
								<tr>
									<td>MTOW</td>
									<td><strong>14,700 lbs | 6,668 kg</strong></td>
								</tr>
								<tr>
									<td>EPU</td>
									<td><strong>2 x magni650</strong></td>
								</tr>
								<tr>
									<td>Continuous / <br> Max Power</td>
									<td><strong>560 kW / 640 kW</strong></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-3 col-md-8">
							<table>
								<tr>
									<th colspan="2">External Dimensions</th>
								</tr>
								<tr>
									<td>Length</td>
									<td><strong>56 ft 1 in | 17.09 m</strong></td>
								</tr>
								<tr>
									<td>Wingspan</td>
									<td><strong>59 ft 1 in | 18.00 m</strong></td>
								</tr>
								<tr>
									<td>Height</td>
									<td><strong>12 ft 7 in | 3.84 m</strong></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="alice" class="panel lt-bg" data-section-name="Greater-Than-The-Sum-of-Her-Parts" data-slide="3">
	<img src="<?php echo get_template_directory_uri(); ?>/images/map-aircraft.svg" class="map-aircraft" />
	<div class="container-fluid fadeInUp3">
		<div class="row">
			<div class="col-xl-8 col-lg-9">
				<div class="px-lg-5">
					<h6>Alice</h6>
					<h2>Greater Than <br>
					The Sum of Her Parts</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-6">
				<div class="px-lg-5">
					<p>Designed and made in collaboration with a world-class ecosystem of partners, Alice is built of innovative components from 11 countries.</p>
					<p>Our development process leverages supply-chain redundancies, and scalability to help us in our path towards certification and serial production.</p>
					<p class="txt-blue"><strong>Aircraft will be available in the US and EU markets first.</strong></p>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
</section>

</body>
</html>