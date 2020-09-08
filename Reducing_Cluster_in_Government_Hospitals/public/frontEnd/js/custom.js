jQuery(document).ready(function($){
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});
/*...................................................
              Slicknav Js 
....................................................*/
$(document).ready(function(){
  $('ul.navigation').slicknav({
    appendTo:".mainmenu",
  });
});
/*...................................................
              Banner Slider 
....................................................*/
$(document).ready(function(){
	// slider-active
	$('.slider-active').owlCarousel({
        margin:0,
		loop:true,
        nav:false,
        dots:true,
		autoplay:true,
		autoplayTimeout:5000,
		smartSpeed:1500,
        responsive:{
            0:{
                items:1,
                nav:false,
                dots:false,
            },
            450:{
                items:1,
                nav:false,

            },
            768:{
                items:1,
                dots:true,
            },
            1000:{
                items:1
            }
        }
    });
	
	// slider-active
	$(".slider-active").on('translate.owl.carousel', function(){
		$('.slider-single img')
			.removeClass('fitZoom')
			.addClass('fitZoomOut')
			.fadeOut();
			
		$('.slider-content h2').removeClass('fadeInDown animated').hide();
		$('.slider-content h3').removeClass('zoomIn animated').hide();
		$('.slider-content p').removeClass('fadeInUp animated').hide();
		$('.slider-content a').removeClass('fadeInUp animated').hide();
		$('.slider-content img').removeClass('fadeOutRight animated').hide();
	});	
		
	$(".slider-active").on('translated.owl.carousel', function(){
		$('.owl-item.active .slider-content h2').addClass('fadeInDown animated').show();
		$('.owl-item.active .slider-content h3').addClass('zoomIn animated').show();
		$('.owl-item.active .slider-content p').addClass('fadeInUp animated').show();
		$('.owl-item.active .slider-content a').addClass('fadeInUp animated').show();
		$('.owl-item.active .slider-content img').addClass('zoomIn animated').show();
	});
});
/*...................................................
              Gallery Isotop Active 
....................................................*/
jQuery(document).ready(function($){
   
     // Activate isotope in container
 
    $(".gallery_item").isotope({
        itemSelector: '.single_item',
        layoutMode: 'fitRows',
    });
    
    // Add isotope click function
    
    $('.gallery_filter li').click(function(){
        $(".gallery_filter li").removeClass("active");
        $(this).addClass("active");
 
        var selector = $(this).attr('data-filter');
        $(".gallery_item").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });

    
});
/*...................................................
              Magnific popup Active 
....................................................*/
$('.view').magnificPopup({
  type: 'image',
  gallery: {
    enabled: true
  },
});
/*...................................................
              Doctor Slider 
....................................................*/
$(document).ready(function(){
  $('.doctor_slider_active').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    dots:false,
	    autoplay:false,
		autoplayTimeout:5000,
		smartSpeed:1500,
		navText:['<i class="icofont icofont-thin-double-left"></i>','<i class="icofont icofont-thin-double-right"></i>'],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4,
	            nav: true
	        }
	    }
	});
});
/*...................................................
              Date-picker Js 
....................................................*/
$(document).ready(function(){
    $('.datepicker').datepicker({
	    format: 'dd/mm/yyyy',
	    startDate: '-3d'
	});
});
/*......................................................
                Collapse Active 
......................................................*/
$('.panel-heading a').click(function() {
    $('.panel-heading').removeClass('active');
    
    //If the panel was open and would be closed by this click, do not active it
    if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
        $(this).parents('.panel-heading').addClass('active');
 });