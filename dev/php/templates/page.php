<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="u-gridContainer white-bg">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol2"> 
				<?php include_once('kvvsidebar.php'); ?>
			</div>

			<div class="u-gridCol<?php echo is_page('checkout') || is_page('products') ||is_page('categories') ||is_page('klaar-vers-vlees') ||is_page('natuurlijke-snacks') ? 10 : 7; ?>"> 
					<div class="main-content">
						
							<div class="main-content-text">
								
								
								

								<?php the_content(); ?>
							</div>
						<?php endwhile; endif; ?>
					</div>
			</div>
			<?php if(!is_page('checkout') && !is_page('products') &&!is_page('categories') &&!is_page('klaar-vers-vlees') &&!is_page('natuurlijke-snacks')) : ?>
			<div class="u-gridCol3" >
				<?php include_once('kvvrightsidebar.php'); ?>
			</div>	
			<?php endif; ?>
		</div>

	</div>
	<!--Ergens een div niet afgesloten!!!!--></div>
	<div class="u-gridRow" style="height:100px;"></div>
</div>


<?php get_footer(); ?>
 

