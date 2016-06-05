<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>
		<div class="">
			<div class="container">
				<div class="content">
					   <div class="content-header">
					   	   <h2><?php the_title() ?></h2>
					   </div>
					   <div class="content-body">					   	 
					   		<p><?php the_content(); ?></p>
					 </div>
				</div>
			</div>
		</div>
<?php endwhile;
}	
?>	
<?php get_footer(); ?>