<!--header start here-->
<div class="bann-two">
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="<?php echo bloginfo('url' ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo1.png" alt=""></a>
				</div>
				<div class="top-nav">
					<span class="menu"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon.png" alt=""/></span>
					<ul class="res">
					<?php wp_nav_menu(array( 'theme_location' 	=> 'main-menu',
									 		// 'container' 		=> 'ul',
									 		'menu_id'			=> 'main-menu',
									 		// 'menu_class'		=> 'res'
				 	)); ?>								
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--header end here-->