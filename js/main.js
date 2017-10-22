var cm;

$(document).on('click', '.msg-fade a', function () {
    var scrollHere = $($.attr(this, 'href')).offset().top;
    $('html, body').animate({
        scrollTop: scrollHere
    }, 500);
    return false;
});


jQuery(function($) {'use strict';


	//Responsive Nav
	$('li.dropdown').find('.fa-angle-down').each(function(){
		$(this).on('click', function(){
			if( $(window).width() < 768 ) {
				$(this).parent().next().slideToggle();
			}
			return false;
		});
	});

	//Fit Vids
	if( $('#video-container').length ) {
		$("#video-container").fitVids();
	}

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $portfolio_selectors = $('.portfolio-filter >li>a');
		
		if($portfolio_selectors.length) {
			
			var $portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.portfolio-item',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}

	});


	$('.timer').each(count);
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
		
	// Search
	$('.fa-search').on('click', function() {
		$('.field-toggle').fadeToggle(200);
	});

	// Contact form
	// var form = $('#main-contact-form');
	// form.submit(function(event){
	// 	event.preventDefault();
	// 	var form_status = $('<div class="form_status"></div>');
	// 	$.ajax({
	// 		url: $(this).attr('action'),
	// 		beforeSend: function(){
	// 			form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
	// 		}
	// 	}).done(function(data){
	// 		form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
	// 	});
	// });

	$('#main-contact-form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },        
        fields: {
            name: {
             message: 'The first name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                        message: 'The name must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z\s]+$/,
                        message: 'The first name can only accept alphabetical input'
                    },
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            message: {
                message: 'Message is not valid',
                validators: {
                    notEmpty: {
                        message: 'Message is required and cannot be empty'
                    }
                }
            }, 

        }
    })
    .on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);
       	var form_status = $('<div class="form_status"></div>');


        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        var url = 'https://script.google.com/macros/s/AKfycbz5t2qONv_QlXzpn6T-jzecQzAiogmLVpXnPBpWddFw_-d-NpU/exec';

        // show the loading 
        $('#main-contact-form').prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
        var jqxhr = $.post(url, $form.serialize(), function(data) {
            console.log("Success! Data: " + data.statusText);
            form_status.html('<p class="text-success">Thank you for your message. I will reply As early as possible</p>').delay(3000).fadeOut();
        })
            .fail(function(data) {
                console.warn("Error! Data: " + data.statusText);
                // HACK - check if browser is Safari - and redirect even if fail b/c we know the form submits.
                if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                    //alert("Browser is Safari -- we get an error, but the form still submits -- continue.");
                    form_status.html('<p class="text-success">Thank you for your message. I will reply As early as possible</p>').delay(3000).fadeOut();
                }
            });
    });


	//Parallax Scroll
	// sticky header    
	$(window).scroll(function(){
	    var winTop = $(window).scrollTop();
	    var winBottom = winTop + $(window).height() > ($(document).height() - 30);

	   if (winTop >= 30){
	      $(".port-header").addClass("colored");
	    }
	    else{
	      $(".port-header").removeClass("colored");
	    }

	    pullDescriptionUp();
	 });


	//portfolio parallax description	
    var $animation_elements = $('.description');
    var $window = $(window);
    function pullDescriptionUp() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);
        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.css("margin-top", (((element_top_position -window_bottom_position) / 5) + 200) );
            } else {
            }
        });
    }
    $window.on('scroll', pullDescriptionUp);
    $window.trigger('scroll');


	// Progress Bar
	$.each($('div.progress-bar'),function(){
		$(this).css('width', $(this).attr('data-transition')+'%');
	});

	if( $('#gmap').length ) {
		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 43.04446,
			lng: -76.130791,
			scrollwheel:false,
			zoom: 16,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		map.addMarker({
			lat: 43.04446,
			lng: -76.130791,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#3e8bff',
		});
	}

	//chat 
	var temp = $('.slide-text'),
		msg = $('.msg');
	temp.on('click', function(){
		msg.addClass ('msg-in');	
	});

	var chatManager = new ChatManager("chat-main-container");


	//showing and hiding portfolio notes
	var notes = $('.notes li'),
        offset = 0.8;

    hideNote(notes,offset);

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        (!window.requestAnimationFrame) 
            ? setTimeout(function(){showNote(notes, offset); }, 100)
            : window.requestAnimationFrame(function(){showNote(notes, offset); });
    });

    //Animation Notes 
    function hideNote(note, offset){
        notes.each(function(){
            $(this).addClass('is-hidden');
        });
    }

    function showNote(note,offset){
        notes.each(function(){
            ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).hasClass('is-hidden') ) && $(this).removeClass('is-hidden').addClass('slideUp');
        });
    }

});