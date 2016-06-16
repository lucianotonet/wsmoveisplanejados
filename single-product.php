<?php get_header() ?>
<?php if( have_posts() ) {
	while (have_posts()) : the_post(); ?>

	<section class="description">
		
		<div class="description-top"></div>

		<div class="container-fluid">
				<div class="description-info">
					<div class="row">
						<?php

							// get_posts in same custom taxonomy
							$postlist_args = array(
							   'posts_per_page'  => -1,
							   'orderby'         => 'menu_order title',
							   'order'           => 'ASC',
							   'post_type'       => 'product'									   
							); 
							$postlist = get_posts( $postlist_args );

							// get ids of posts retrieved from get_posts
							$ids = array();
							foreach ($postlist as $thepost) {
							   $ids[] = $thepost->ID;
							}

							// get and echo previous and next post in the same taxonomy        
							$thisindex = array_search($post->ID, $ids);
							$previd = @$ids[$thisindex-1];
							$nextid = @$ids[$thisindex+1];
							if ( !empty($previd) ) {
							   echo '<a class="col-md-1 nav-prev text-uppercase" rel="prev" href="' . get_permalink($previd). '"><i class="icon-arrow-left"></i></a>';
							}									

						?>
						<div class="col-md-7">							
							<?php
							if( has_post_thumbnail( get_the_id() ) ){
								$large = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'original' ); ?>
									<a class="fancybox" rel="group" href="<?php echo @$large[0] ?>">
										<?php if( has_post_thumbnail( get_the_id() ) ){
											echo the_post_thumbnail('full', array('class'=>'img-responsive') );
										} ?>
									</a>
							<?php }
							?>							
						</div>
						<div class="col-md-3">
							<article class="product">
							<h2 class="product-title"><?php the_title() ?></h2>
							<?php 
								// $ref = ( rwmb_meta( 'wsmoveisplanejados_product_ref' ) ) ? "Ref:  ".rwmb_meta( 'wsmoveisplanejados_product_ref' ) : ''; 
								// $alt = ( rwmb_meta( 'wsmoveisplanejados_product_alt' ) ) ? " | ".rwmb_meta( 'wsmoveisplanejados_product_alt' ) : '';
								// $larg = ( rwmb_meta( 'wsmoveisplanejados_product_larg' ) ) ? "X".rwmb_meta( 'wsmoveisplanejados_product_larg' ) : '';
								// $prof = ( rwmb_meta( 'wsmoveisplanejados_product_prof' ) ) ? "X".rwmb_meta( 'wsmoveisplanejados_product_prof' ) : '';
								// echo $ref.$alt.$larg.$prof; 
							?>
							
							<div class="post-content product-content"><?php the_content() ?></div>

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
		                    </article>

						</div>

						
						<?php 
							if ( !empty($nextid) ) {
							   echo '<a class="col-md-1 nav-next text-uppercase" rel="next" href="' . get_permalink($nextid). '"><i class="icon-arrow-right"></i></a>';
							}
						 ?>
						</div>
			</div>
		</div>
	</section>
		
<?php endwhile;
}	
?>	
<?php get_footer(); ?>