<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>

	<section class="description">
		<div class="description-top">
			<h2><?php the_title() ?></h2>
		</div>
		<div class="container">
			<div class="text-center">
				<div class="description-info">
					<div class="col-md-12">
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php endwhile;
}	
?>	
<?php get_footer(); ?>