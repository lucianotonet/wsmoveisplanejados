<?php /* Template name: Modelo Produtos */ ?>
<?php get_header() ?>

<div class="container">
	<div class="gallery-top ">
		<h2>Produtos</h2>
		<p>Móveis com design variado para harmonizar com o seu ambiente.</p>
	</div>  
	<div class="produtos">

		<div class="row">

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
					<div class="row">
						<?php foreach ($produtosLinha as $produto) { ?>
							<article class="product col-md-4" id="post-<?php echo $produto->ID ?>">
								<div class="content">
									<h2><a href="<?php echo $produto->guid ?>"><?php echo $produto->post_title ?></a></h2>                    

									<?php if ( get_the_post_thumbnail( $produto->ID ) ) {?>
										<a href="<?php echo $produto->guid ?>">
											<figure class="">
												<?php echo get_the_post_thumbnail( $produto->ID ); ?>                        
											</figure>
										</a>										
										<?php }?>         

									</div>    
								</article>
								<?php } ?>
							</div>
							<?php }

						}
wp_reset_query();  // Restore global post data stomped by the_post().
?>  

</div>

</div>
</div>  

<?php get_footer(); ?>