<?php /* Template name: Modelo "Home" */ ?>
<?php get_header(); ?>
<?php if( have_posts() ) {
	while (have_posts()) { the_post(); ?>

		<!--header start here-->
		<?php
		if( has_post_thumbnail( get_the_id() ) ){
		$bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'original' ); // get_the_id(), 'full' );	
		// var_dump($bgimage[0]);
		// exit;
	} ?>
	
	<div class="banner" style="background-image: url(<?php echo @$bgimage[0]; ?>)" >

		<div class="banner-bottom" >
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>

	</div>

	<section class="seal">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/seal.png" alt="">
		<span><strong>#design</strong> e <strong>requinte</strong> na <strong>medida</strong> certa</span>
	</section>

	<div class="bann-info">
		<div class="bann-info-main">
			<?php
			$images = rwmb_meta( 'wsmoveisplanejados_section_1_image' );
			$image = reset($images);
			?>
			<div class="col-md-6 bann-info-left" style="background-image: url(<?php echo @$image['full_url']; ?>)"></div>
			<div class="col-md-6 bann-info-right"><?php echo rwmb_meta( 'wsmoveisplanejados_section_1_text' ) ?></div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="home">
		<div class="home-main">
			<?php
			$images = rwmb_meta( 'wsmoveisplanejados_section_2_image' );
			$image = reset($images);
			?>
			<div class="col-md-6 home-left">
				<?php echo rwmb_meta( 'wsmoveisplanejados_section_2_text' ) ?>
			</div>
			<div class="col-md-6 home-right" style="background-image: url(<?php echo $image['full_url'] ?>)"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--home end here-->
	<!--our creaction start  here-->
<!-- <div class="creation">
	<div class="container">
		<div class="creation-main">
			<div class="col-md-4 creation-grid">
				<h3>Our Creations</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
			</div>
			<div class="col-md-4 creation-grid">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/m3.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-4 creation-grid">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/m4.jpg" alt="" class="img-responsive">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div> -->
<!--our creaction end here-->

<?php } ?>
<?php } ?>
<?php get_footer(); ?>