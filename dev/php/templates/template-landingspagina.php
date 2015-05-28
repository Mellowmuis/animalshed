<?php
/*
Template Name: Landingspagina
*/
?> 

<?php get_header(); ?>
<div class="u-gridContainer white-bg">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol2"> 
				<div class="thumb green">
					<div class="thumb-head "><b>KLAAR VERS VLEES</b></div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wurst.jpg">
					<button>Meer info & bestellen</button>
				</div>
				<div class="thumb green">
					<div class="thumb-head "><b>NATUURLIJKE SNACKS</b></div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wurst.jpg">
					<button>Meer info & bestellen</button>
				</div>
				<div class="thumb green">
					<div class="thumb-head "><b>HONDENSPEELGOED</b></div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wurst.jpg">
					<button>Meer info & bestellen</button>
				</div>
				<div class="thumb green">
					<div class="thumb-head "><b>HOKKEN& AFRASTERING</b></div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wurst.jpg">
					<button>Meer info & bestellen</button>
				</div>
			</div>


			<div class="u-gridCol7"> 
				<div class="Slider">

					<?php

						$args = array(
							'post_type' => 'slides',
							'posts_per_page'=>999
						);
						$slides = new WP_Query( $args );
						$num = count($slides);
						$counter = 0;
						if( $slides->have_posts() ) {
							while( $slides->have_posts() ) {
								$slides->the_post();
								$counter++;
								?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									  $image_url = $image[0];
								?>
								<div class="slide" style="">
									<div class="slide-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<img src="<?php echo $image_url; ?>" />
								</div>
								<?php
							}
						}
					?>
				</div>
				<div class="middle-thumb">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
							<div>
								<?php the_content(); ?>
								<button class="blue-button u-objRight"><a href="/home/">Home</a> </button>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

							</div>
						</article>
					<?php endwhile; endif; ?>

				</div>
			</div>


			<div class="u-gridCol3"> 
				<div class="thumb blue">
					<div class="thumb-head ">
						<b>COMPLEET VOER RUND</b>
						<p>KVV worst van 1000 gram</p>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wurst.jpg">
					<div class="bottom">
						<p>Voor de baasjes die wel eens worst geven om de gezondheid en welzijn van hun hond.</p>
					</div>
				</div>
				<div class="thumb blue">
					<div class="thumb-head ">
						<b>THE ANIMALSHED</b>
					</div>
					<div class="padding">
						<ul>
							<li>7 dagen per week via mail bereikbaar</li>
							<li>Leveringen binnen een straal van 10 km slechts €7,50 </li>
							<li>Dinsdag en Donderdag  afhalen mogelijk tussen 16:00 en 20:00 uur</li>
							<li>The Animalshed geeft uw viervoeter gegarandeerd meer eetplezier en pret.</li>
						</ul>
					</div>
					
				</div>
				<div class="thumb blue">
					<div class="thumb-head ">
						<b>VEILIGE BETAALMETHODEN</b>
					</div>
					<div class="padding">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/betaal.png">
					</div>
					
				</div>
				<div class="thumb blue">
					<div class="thumb-head ">
						<b>HONDENVOER VERGELIJKEN</b>
					</div>
					<div class="padding">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/uit.png">
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="u-gridRow" style="height:100px;"></div>
</div>


<?php get_footer(); ?>
 