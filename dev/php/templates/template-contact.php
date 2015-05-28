<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer white-bg">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h3 class="no-marg"><?php the_title(); ?></h3>
				<div class="Content-text">

					<div class="u-gridRow">					
				
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>
						
					</div> <!-- /gridRow -->
					<div class="u-gridRow"><hr>					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<h5 class="no-marg">Adresgegevens</h5>
								<p>The Animalshed</p>
								<p>Vijfhuizenberg 121</p>
								<p>4708 AJ Roosendaal</p>
								<p>Email: </p>
								<p>Tel: 0165561424</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<h5 class="no-marg">Contactformulier</h5>
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>

					</div> <!-- /gridRow -->			
				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

