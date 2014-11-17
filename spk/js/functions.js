				
// SCROLL TO TOP ===============================================================================
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},500);
		
	});	
	
});



if( window.innerWidth < 770 ) {
	$("button.forward, button.backword").click(function() {
  $("html, body").animate({ scrollTop: 115 }, "slow");
  return false;
});
}

if( window.innerWidth < 500 ) {
	$("button.forward, button.backword").click(function() {
  $("html, body").animate({ scrollTop: 245 }, "slow");
  return false;
});
}
if( window.innerWidth < 340 ) {
	$("button.forward, button.backword").click(function() {
  $("html, body").animate({ scrollTop: 280 }, "slow");
  return false;
});
}


    
// WIZARD  ===============================================================================
jQuery(function($) {
				// Example 1: Basic wizard with validation
				$("#survey_container").wizard({
					stepsWrapper: "#wrapped",
					submit: ".submit",
					beforeSelect: function( event, state ) {
						var inputs = $(this).wizard('state').step.find(':input');
						return inputs.length || inputs.valid();
					}
			

				}).validate({
					errorPlacement: function(error, element) { 
						if ( element.is(':checkbox') ) {
							error.insertBefore( element.next() );
							

						} else { 
							error.insertAfter( element );
						}
					}
				});
				
				

				// Example 2: Basic wizard with progress bar
				$("#progressbar").progressbar();

				$("#survey_container").wizard({
					afterSelect: function( event, state ) {
						$("#progressbar").progressbar("value", state.percentComplete);
						$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
					}
				});

			});

// OHTER ===============================================================================
 $(document).ready(function(){   
			    $("#radio3").click(function(){
					$("#biayasmt").hide('slow');
					$("#biayathn").hide('slow');
					$("#biayabulan").show('slow');
				});
				$("#radio4").click(function(){
					$("#biayabulan").hide('slow');
					$("#biayathn").hide('slow');
					$("#biayasmt").show('slow');
				});
				$("#radio5").click(function(){
					$("#biayabulan").hide('slow');
					$("#biayasmt").hide('slow');
					$("#biayathn").show('slow');
				});
				
						var counter = 0, // to keep track of current slide
			$items = $('.diy-slideshow figure'), // a collection of all of the slides, caching for performance
			numItems = $items.length; // total number of slides

		// this function is what cycles the slides, showing the next or previous slide and hiding all the others
		var showCurrent = function(){
			var itemToShow = Math.abs(counter%numItems);// uses remainder (aka modulo) operator to get the actual index of the element to show  
		   
		  $items.removeClass('show'); // remove .show from whichever element currently has it
		  $items.eq(itemToShow).addClass('show');    
		};

		// add click events to prev & next buttons 
		$('.next').on('click', function(){
			counter++;
			showCurrent(); 
		});
		$('.prev').on('click', function(){
			counter--;
			showCurrent(); 
		});

		// if touch events are supported then add swipe interactions using TouchSwipe https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
		if('ontouchstart' in window){
		  $('.diy-slideshow').swipe({
			swipeLeft:function() {
			  counter++;
			  showCurrent(); 
			},
			swipeRight:function() {
			  counter--;
			  showCurrent(); 
			}
		  });
		}
				
		//Menu mobile
		$(".btn-responsive-menu").click(function() {
			$("#top-nav").slideToggle(400);
		});
		
		////Menu mobile
		//$('input').iCheck({
    	//checkboxClass: 'icheckbox_square-aero',
   	   // radioClass: 'iradio_square-aero'
  		//});
		
		//Radio and check buttons
		//$('input').iCheck({
    	//checkboxClass: 'icheckbox_square-aero'
    	//radioClass: 'iradio_square-aero',
		
		
  		//});
		
				
		
		//Pace holder
		$('input, textarea').placeholder();
				
				
				
		
		//Switch button
		$('select.example-1').switchify({ });
		
		$('#tweets').tweetable({username: 'ansonika', time: true, limit: 2, replies: true, position: 'append'});
		
		//Carousel
		$("#owl-demo").owlCarousel({
		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		 
		});
    
    });








    

