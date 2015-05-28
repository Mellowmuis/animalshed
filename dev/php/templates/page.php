<?php get_header(); ?>
<div class="u-gridContainer white-bg">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol2"> 
				<?php include_once('kvvsidebar.php'); ?>
			</div>

			<div class="u-gridCol<?php echo is_page('checkout') ? 10 : 7; ?>"> 
					<div class="main-content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="main-content-text">
								<?php if(get_the_title() != '') : ?>
								<h2><?php the_title(); ?></h2>
								<?php endif; ?>

								<?php the_content(); ?>
							</div>
						<?php endwhile; endif; ?>
					</div>
			</div>
			<?php if(!is_page('checkout')) : ?>
			<div class="u-gridCol3" >
				<?php include_once('kvvrightsidebar.php'); ?>
			</div>	
			<?php endif; ?>
		</div>
	</div>
	<div class="u-gridRow" style="height:100px;"></div>
</div>


<?php get_footer(); ?>
 

