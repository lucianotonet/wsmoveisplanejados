<?php /* Template name: Modelo "Monte seu ambiente" */ ?>
<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>
		<div class="services">
			<div class="container">
				<div class="services-main">
					<div class="content-header">

						<h2><?php the_title() ?></h2>

					</div>
				</div>
			</div>
		</div>
		<!--services end here-->
		<div class="serv-strip">
			<div class="container">
				<div class="serv-strip-main">
						<?php the_content(); ?>					    
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--deliver strat here-->
<?php endwhile;
}	
?>	
<?php get_footer(); ?>