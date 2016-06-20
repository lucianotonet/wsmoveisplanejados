<?php get_header() ?>

<div class="container">
	<div class="content-header">
		<h2><?php the_title() ?></h2>
		<?php the_content() ?>
	</div>  
	<div class="produtos">

		<div class="row">
			<?php wp_tag_cloud( array( 'taxonomy' => 'category', 'format' => 'list' ) ); ?>
		</div>

		<script>
			console.log("Trte");
		</script>

		<div class="row">

			<?php
			
			// 	while (have_posts()){ 
			// 		the_post();
					// $post = $wp_query->have_posts();

					echo "<script >";
					echo "console.log(" . json_encode( $wp_query->posts() ) . ")";
					echo "console.log('Teste')";
					echo "</script>";

			if( $wp_query->have_posts() ) {
				$produtosLinhas = array_chunk( $wp_query->posts, 3);

				foreach ($produtosLinhas as $produtosLinha) { ?>
					<div class="row">
						<?php foreach ($produtosLinha as $produto) { ?>

							<article class="product col-md-4" id="post-<?php echo $produto->ID ?>">
								<div class="content">
									<h2 class="product-title"><a href="<?php echo $produto->guid ?>"><?php echo $produto->post_title ?></a></h2>
									<div class="product-content"><?php echo $produto->post_content; ?></div>

									<?php if ( get_the_post_thumbnail( $produto->ID ) ) {?>
										<a href="<?php echo $produto->guid ?>">
											<figure class="">
												<?php echo get_the_post_thumbnail( $produto->ID, 'full', array('class'=>'img-responsive') ); ?>                        
											</figure>
										</a>										
										<?php }?>         

									</div>    
								</article>
								<?php } ?>
							</div>
							<?php }
							// }	

						}
wp_reset_query();  // Restore global post data stomped by the_post().
?>  

</div>

</div>
</div>  


<?php get_footer(); ?>