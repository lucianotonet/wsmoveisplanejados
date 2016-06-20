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

	$(".fancybox").fancybox(
		{
    		openEffect	: 'elastic',
    		closeEffect	: 'elastic',    	
    		padding	: 0,    	
    	}
	);


	// init Isotope
	var $grid = $('.grid').isotope({
		layoutMode: 'fitRows',
			fitRows: {
			  gutter: 0
			}
	});
	
	// filter items on button click
	$('.filter-button-group a').click( function() {
		var filterValue = $(this).attr('data-filter');
		console.log(filterValue);
		$grid.isotope({ 
			filter: filterValue,
			layoutMode: 'fitRows',
			fitRows: {
			  	gutter: 0
			}
		});
	});
	
});
