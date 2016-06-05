<!--header start here-->
<div class="bann-two">
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="index.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo1.png" alt=""></a>
				</div>
				<div class="top-nav">
					<span class="menu"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon.png" alt=""/></span>
					<ul class="res">
					<?php wp_nav_menu(array( 'theme_location' 	=> 'main-menu',
									 		// 'container' 		=> 'ul',
									 		'menu_id'			=> 'main-menu',
									 		// 'menu_class'		=> 'res'
				 	)); ?>
					<!-- <ul class="res">
						<li><a href="index.html" class="active">Home</a></li> 
						<li><a href="about.html">Quem somos</a></li> 
						<li><a href="services.html">Monte seu ambiente</a></li> 
						<li><a href="gallery.html">Produtos</a></li> 
						<li><a href="contact.html">Fale conosco</a></li>
					</ul> -->
					<li class="social-icons">
						<a href="http://facebook.com" target="_blank">
							<span class="fa fa-facebook"></span>
						</a>
						<a href="http://facebook.com" target="_blank">
							<span class="fa fa-twitter"></span>
						</a>
						<a href="http://facebook.com" target="_blank">
							<span class="fa fa-google-plus"></span>
						</a>
					</li> 
					</ul>
					<!-- script-for-menu -->					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--header end here-->