<?php /* Template name: Modelo Produtos - AngularJS */ ?>
<?php get_header() ?>

<?php 

if( have_posts() ) {
	while (have_posts()) : the_post(); ?>

<div class="container" ng-app="produtos">
	<div class="content-header">
		<h2><?php the_title() ?></h2>		
		<?php the_content() ?>
	</div>  
	<div class="produtos">

		<hr>

		<div class="row">					

			<div class="text-uppercase text-center filter-button-group">					
				<a class="btn btn-warning btn-md" data-filter="*">Todos</a>
				<?php 
				$terms = get_terms( array(
				    'taxonomy' => 'category',
				    'hide_empty' => false,
				) );
				foreach ($terms as $key => $value) { ?>
		  			<a class="btn btn-warning btn-md" data-filter=".<?php echo $value->slug; ?>"><?php echo $value->name; ?></a>
				<?php } ?>
				</div>	
				<?php // wp_tag_cloud( array( 'taxonomy' => 'category', 'format' => 'list' ) ); ?>
		</div>

		<hr>
		
		

			<div class="grid row"> 

			<?php
			$type = 'product';
			$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				'posts_per_page' => -1                                 
				);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {

				echo "<script>";
				echo "console.log(" . json_encode( $my_query->posts ) . ")";
				echo "</script>";

				$produtosLinhas = array_chunk($my_query->posts, 3);

// echo "<pre>";
// print_r( $produtosLinhas );
// echo "</pre>";


				foreach ($produtosLinhas as $produtosLinha) { ?>

						<?php foreach ($produtosLinha as $produto) { ?>

							<?php
								$terms = get_the_terms( $produto->ID, 'category' );
					                         
								if ( $terms && ! is_wp_error( $terms ) ) : 
								 
								    $draught_links = array();
								 
								    foreach ( $terms as $term ) {
								        $draught_links[] = $term->slug;
								    }
								                         
								    $on_draught = join(" ", $draught_links );
								    ?>								
								<?php endif;
							?>
							<article class="product col-md-4 element-item <?php echo $on_draught ?>" id="post-<?php echo $produto->ID ?>">
								<div class="content">
									<h2 class="product-title"><a href="<?php echo get_permalink( $produto->ID ) ?>"><?php echo $produto->post_title ?></a></h2>
									<div class="product-content"><?php echo $produto->post_content; ?></div>

									<?php if ( get_the_post_thumbnail( $produto->ID ) ) {?>
										<a href="<?php echo get_permalink( $produto->ID ) ?>">
											<figure class="">
												<?php echo get_the_post_thumbnail( $produto->ID, 'full', array('class'=>'img-responsive') ); ?>                        
											</figure>
										</a>										
									<?php } ?>         

								</div>    
							</article>
							<?php } ?>
					<?php }

					}
	wp_reset_query();  // Restore global post data stomped by the_post().
?>  
			</div>    

</div>

</div>
</div>  

	<?php endwhile;
	}	
?>

<?php get_footer(); ?>