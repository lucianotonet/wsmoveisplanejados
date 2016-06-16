<?php /* Template name: Modelo "Quem somos" */ ?>
<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>
		<!--about strat here-->
		<div class="about" id="about">
			<div class="container">
				<div class="about-main">
					   <div class="content-header">
					   	   <h2><?php the_title() ?></h2>
					   </div>
					   <div class="about-bottom">
					   	   <p><?php the_content() ?></p>					   	 
					 </div>
				</div>
			</div>
		</div>
<?php endwhile;
}	
?>	
<?php get_footer(); ?>