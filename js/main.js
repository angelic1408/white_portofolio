function ChatManager(elementId) {
	var chatManager = this;
	var chatOptions = [
		{
			"text": ["Hello", "My name is Angel", "A UX designer based in Japan", "Is English OK for you?"],
			"options": [ {"text":"Yes, in English please", "link":1}, {"text":"日本語でお願いします。","link":10}]
		},
		{
			"text": ["Nice!", "Do you like photography?"],
			"options": [ {"text":"Yass!!!", "link":2}, {"text":"meh...","link":3}]
		},
		{
			"text": ["Me too", "I love to travel and takes photo", "I have my own travel blog."],
			"options": [ {"text":"Cool, take me to your blog", "link": -1}, {"text":"Let's talk about design","link":4}]
		},
		{
			"text": ["I see...", "Probably a little bit more about me", "I'm a pixel crafter, I help company create a good design"],
			"options": [ {"text":"Really? What company?", "link":5}, {"text":"Cool, show me your gigs", "link": -1}]
		},
		{
			"text": ["...Wait...", "Are you possibly a designer too?"],
			"options": [ {"text":"Yes!!!", "link": 6}, {"text":"Nope","link":7}]
		},
		{
			"text": ["I work for Rakuten Japan.", "I also worked at Indonesia before."],
			"options": [ {"text":"Indonesia? What did you do?", "link": -1}, {"text":"What did you do for them?", "link":8}]
		},
		{
			"text": ["I know it!!!", "Do you want to see my work?"],
			"options": [ {"text":"Sure, show me!", "link": -1}, {"text":"Nope","link":9}]
		},
		{
			"text": ["It's OK", "But thank you for coming to my blog", "drop me your contact and message, I'll get back to you."],
			"options": [ {"link": -1}]
		},
		{
			"text": ["I'm happy to talk about it", "Drop me your message and contact, I'll get back to you."],
			"options": [ {"link": -1}]
		},
		{
			"text": ["Interesting. By the way, I gotta go now, my planet needs me.", "Feel free to browse my site."]
		},
		{
			"text": ["じゃ、日本語で", "えー私は「楽しい！」「心地いい！」ウェブやアップリを作ります。", "あなたはデザイナーさんでしょうか？"],
			"options": [ {"text":"はい、私も。", "link":11}, {"text":"あ！違いますね。","link":12}]
		},
		{
			"text": ["やっぱり！他のデザイナーさんに会えると嬉しいな。", "私の制作を見ましょうか？"],
			"options": [ {"text":"見たい！", "link": -1}, {"text":"後で見る。","link":13}]
		},
		{
			"text": ["ごめん、ごめん。", "じゃ、私のことをちょっとだけ話します。", "インドネシア出身です。写真を撮るのは大好き。"],
			"options": [ {"text":"ええ！！写真見せていい？", "link": -1}, {"text":"そうか？日本で何をしてますか？","link":14}]
		},
		{
			"text": ["いいよ。", "私のサイトでごゆっくりどうぞ。"]
		},
		{
			"text": ["大学院生だった。", "今はUI/UXデザイナーとして、楽天で勤めています。", "インドネシアでも働いた経験があります。"],
			"options": [ {"text":"こっちの大学？どこ？", "link": -1}, {"text":"もっと詳しいで教えてください。","link":15}]
		},
		{
			"text": ["いいよ。", "でも、この後ミーティングがありますので、", "メッセージを書いて、またご連絡をさせていただきます。"],
			"options": [ {"text":"了解です。", "link": -1} ]
		}
	];
	var mainContainer = $("#"+elementId);
	var chatContainer = mainContainer.find(".chat-text-container");
	var responseContainer = mainContainer.find(".chat-response-container");
	var animationsManager = new AnimationsManager();

	this.handleClick = function(option) {
		var chatOption = chatOptions[option];
		for (var i in chatOption["text"]) {
			var text = chatOption["text"][i];
			chatManager.displayOtherChatText(text);
		}
		chatManager.clearResponseOptions();
		chatManager.popResponseTexts(chatOption);
	}

	this.clearResponseOptions = function() {
		responseContainer.fadeOut(400);
		responseContainer.html("");
	}

	this.popResponseTexts = function(chatOption) {
		for (var i in chatOption["options"]) {
			var option = chatOption["options"][i];
			var element = $("<div class='msg response-choice chat-response'></div>");
			element.html("<p>" + option["text"] + "</p>");
			element.data("text", option["text"]);
			element.data("link", option["link"]);
			element.click(function(){
				var text = $(this).data("text");
				var link = $(this).data("link");
				chatManager.displaySelfChatText(text);
				chatManager.handleClick(link);
			});
			responseContainer.append(element);
		}
		responseContainer.fadeIn(400);
	}	
	
	this.displayOtherChatText = function(text) {
		var element = $("<li class='other'></li>");
		element.html("<div class='msg'><p>"+text+"</p></div>");

		var chatBox = element.find(".msg");
		var chatBoxText = element.find(".msg p");
		var temp = chatBoxText.html(text).width();
		chatBoxText.html("");
		chatContainer.append(element);

		animationsManager.bindAnimationEndCallback(chatBox);
		animationsManager.addAnimation(function() { chatBox.addClass("msg-in"); });
		animationsManager.addAnimation(function() { chatManager.dots(chatBoxText); animationsManager.next(); });
		animationsManager.addDelay();
		//chatBox.css('min-width', temp +"px");
		animationsManager.addAnimation(function() { chatBoxText.html(text); animationsManager.next(); });
		// animationsManager.addAnimation(function() { chatBox.hide(); });
		// animationsManager.addAnimation(function() { chatBox.addClass("msg-fade"); });
	}

	this.displaySelfChatText = function(text) {
		var element = $("<li class='self'></li>");
		element.html("<div class='msg'><p>" + text + "</p></div>");
		element.hide();
		chatContainer.append(element);
		element.fadeIn(400);
		element.find(".msg").addClass("msg-up");
	}

	this.dots = function(chatBoxText) {
		var count = 0;
		var string = '';
		chatBoxText.html("");
		var intervalId = setInterval(function() {
			string = string == "...." ? "" : string;
			string += '.';
			chatBoxText.html(string);
			count++;
			if (count >= 8) {
				clearInterval(intervalId);
			}
		}, 100);
	}

	// Start
	this.handleClick(0);
}

function AnimationsManager() {
	var animationsManager = this;
	var animationsQueue = [];
	var isAnimating = false;

	this.addDelay = function() {
		this.addAnimation(function() {
			isAnimating = true;
			setTimeout(function() { isAnimating = false; }, 500);
		});
	}

	this.addAnimation = function(animation) {
		animationsQueue.push(animation);
	}

	this.bindAnimationEndCallback = function(element) {
		element.on("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", this.next);
	}

	this.getAnimationsQueue = function() {
		console.log("isAnimating: " + isAnimating);
		return animationsQueue;
	}
	this.unblockAnimations = function() {
		isAnimating = false;
	}

	this.next = function(event) {
		setTimeout(function() {
			isAnimating = false;
		}, 500);
	}

	this.animate = function() {
		if (!isAnimating && animationsQueue.length>0) {
			var animation = animationsQueue.shift();
			isAnimating = true;
			animation();
		}
	}

	setInterval(this.animate, 100);
}

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
	  });

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