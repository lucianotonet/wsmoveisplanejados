jQuery(document).ready(function($) {
	$( "span.menu" ).click(function() {
		$( "ul.res" ).slideToggle( 300, function() {
		 // Animation complete.
		});
	});
	
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});


	$().UItoTop({ easingType: 'easeOutQuart' });

	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }	
});