<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>

	<section class="description">
		<div class="description-top">
			<!--	 <h2>Descrição do produto</h2> -->
		</div>
		<div class="container">
			<div class="text-center">
				<div class="description-info">
					<div class="col-md-12">
						<div class="col-md-6">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/01.png" alt="">
						</div>
						<div class="col-md-6">
							<h2><?php the_title() ?></h2>
							<p>Ref: R501 | 700x1200X350</p>

							<?php $i = 0; ?>
		                    <?php foreach( rwmb_meta( 'wsmoveisplanejados_section_gallery_images', 'type=file&size=large-wide' ) as $image ){ ?>
		                        <figure class="">
		                            <div class="img-wrapper">
		                                <a rel="gallery" class="fancybox" href="<?php echo $image['full_url']; ?>">
		                                    <img src="<?php echo $image['url']; ?>" class="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>">
		                                </a>                                            
		                            </div>
		                        </figure>                                                                
		                    <?php } ?>    

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php endwhile;
}	
?>	
<?php get_footer(); ?>