// $(function () {
// 	$('[data-toggle="tooltip"]').tooltip()
//   })



(function($) {
	"use strict"
	///=============  Background Image  =============\\\
	$("[data-background]").each(function() {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
	});
	///=============  Search Icon  =============\\\
	$('.header__area-menubar-right-box-search-icon.open').on('click', function() {
		$('.header__area-menubar-right-box-search-box').fadeIn().addClass('active');
	});
	$('.header__area-menubar-right-box-search-box-icon').on('click', function() {
		$(this).fadeIn().removeClass('active');
	});
	$('.header__area-menubar-right-box-search-box-icon i').on('click', function() {
		$('.header__area-menubar-right-box-search-box').fadeOut().removeClass('active');
	});
	$('.header__area-menubar-right-box-search-box form').on('click', function(e) {
		e.stopPropagation();
	});
	///=============  Sidebar Popup  =============\\\
	$('.header__area-menubar-right-box-sidebar-popup-icon').on("click", function() {
		$('.header__area-menubar-right-sidebar-popup').addClass('active');
	});
	$('.header__area-menubar-right-sidebar-popup .sidebar-close-btn').on("click", function() {
		$('.header__area-menubar-right-sidebar-popup').removeClass('active');
	});
	$('.sidebar-overlay').on("click", function() {
		$('.header__area-menubar-right-sidebar-popup').removeClass('active');
		$('.sidebar-overlay').removeClass('show');
	});
	$('.header__area-menubar-right-box-sidebar-popup-icon').on("click", function() {
		$('.sidebar-overlay').addClass('show');
	});
	$('.header__area-menubar-right-sidebar-popup .sidebar-close-btn').on("click", function() {
		$('.sidebar-overlay').removeClass('show');
	});
	///=============  Responsive Menu  =============\\\
	$('.menu-responsive').meanmenu({
		meanMenuContainer: '.responsive-menu',
		meanScreenWidth: '991',
		meanMenuOpen: '<span></span><span></span><span></span>',
		meanMenuClose: '<i class="fal fa-times"></i>'
	});
	///=============  Header Sticky  =============\\\
	$(window).on('scroll', function() {
		var scrollDown = $(window).scrollTop();
		if(scrollDown < 135) {
			$(".header__sticky").removeClass("header__sticky-sticky-menu");
		} else {
			$(".header__sticky").addClass("header__sticky-sticky-menu");
		}
	});
    ///=============  Banner One Slider  =============\\\
    let bannerOne = ".banner-one-slider";
    let sliderOne = new Swiper(bannerOne, {
        loop: true,
        slidesPerView: 1,
        effect: "fade",
        autoplay: {
            delay: 5000,
			reverseDirection: true,
			disableOnInteraction: false,			
        },
        pagination: {
            el: ".banner-four-pagination",
            clickable: true,
        },
    });
	///=============  Banner Two Slider  =============\\\
	let bannerTwo = '.banner-two-slider';
	let sliderTwo = new Swiper(bannerTwo, {
		loop: true,
		slidesPerView: 1,
		effect: 'fade',
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},		
		pagination: {
			el: ".banner-pagination",
			clickable: true,
		},
	});	
    function animated_swiper(selector, init) {
        let animated = function animated() {
            $(selector + " [data-animation]").each(function () {
                let anim = $(this).data("animation");
                let delay = $(this).data("delay");
                let duration = $(this).data("duration");
                $(this)
                .removeClass("anim" + anim)
                .addClass(anim + " animated")
                .css({
                    webkitAnimationDelay: delay,
                    animationDelay: delay,
                    webkitAnimationDuration: duration,
                    animationDuration: duration,
                })
                .one("animationend", function () {
                    $(this).removeClass(anim + " animated");
                });
            });
        };
        animated();
        init.on("slideChange", function () {
            $(bannerOne + " [data-animation]").removeClass("animated");
        });
        init.on("slideChange", animated);
    }
    animated_swiper(bannerOne, sliderOne);
    animated_swiper(bannerTwo, sliderTwo);

	///=============  Banner Three Slider  =============\\\
	var swiper = new Swiper(".banner__three__slider", {
		loop: true,	
		slidesPerView: 2,
		spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
		  clickable: true,
        },
    });	


	///=============  Latest Sermon Slider  =============\\\
	
	var swiper = new Swiper(".latest_sermon-slider", {
		spaceBetween: 35,
		slidesPerView: 4,
		centeredSlides: true,
		loop: true,
		autoplay: {
			delay: 7000, // Time between auto-swipes in milliseconds
			disableOnInteraction: false, // Keep autoplay running after user interactions like swiping
		},
		breakpoints: {
			0: {
				slidesPerView: 1
			},
			575: {
				slidesPerView: 1
			},
			992: {
				slidesPerView: 3
			},
			1200: {
				slidesPerView: 3
			},
		}
	});

		///=============  Quote - Word of the Day Slider  =============\\\
	
		var swiper = new Swiper(".quote-slider", {
			spaceBetween: 35,
			slidesPerView: 3,
			centeredSlides: true,
			loop: true,
			autoplay: {
				delay: 7000, // Time between auto-swipes in milliseconds
				disableOnInteraction: false, // Keep autoplay running after user interactions like swiping
			},
			breakpoints: {
				0: {
					slidesPerView: 1
				},
				575: {
					slidesPerView: 1
				},
				992: {
					slidesPerView: 3
				},
				1200: {
					slidesPerView: 3
				}
			}
		});
		



	///=============  Portfolio 1 Slider  =============\\\
	
	var swiper = new Swiper(".portfolio__one-slider", {
		spaceBetween: 35,
		slidesPerView: 3,
		centeredSlides: true,
		loop: true,
		breakpoints: {
			0: {
				slidesPerView: 1
			},
			575: {
				slidesPerView: 1
			},
			992: {
				slidesPerView: 3
			},
			1200: {
				slidesPerView: 3
			},
		}
	});

	/*==========  Brand  ==========*/
	var swiper = new Swiper(".brand__slider", {
		loop: true,
		speed: 1500,
		spaceBetween: 30,
		autoplay: true,
		autoplay: {
			delay: 100,
		},
		breakpoints: {
			0: {
				slidesPerView: 2
			},
			575: {
				slidesPerView: 3
			},
			992: {
				slidesPerView: 4
			},
			1200: {
				slidesPerView: 5
			},
		}
	});

	///=============  Team Details Skill Bar  =============\\\
	if($('.team__details-skills-item-bar').length) {
		$('.team__details-skills-item-bar').appear(function() {
			var el = $(this);
			var percent = el.data('width');
			$(el).css('width', percent + '%');
		}, {
			accY: 0
		});
	};
	///=============  Experience Skill Bar  =============\\\
	if($('.skill-area__one-right-skill-item-bar').length) {
		$('.skill-area__one-right-skill-item-bar').appear(function() {
			var el = $(this);
			var percent = el.data('width');
			$(el).css('width', percent + '%');
		}, {
			accY: 0
		});
	};
	
	///=============  Testimonial  =============\\\
	var swiper = new Swiper(".testimonial__one-slider-active", {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 1,
		fadeIn: true,
		speed: 1500,
		nav: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			1200: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
		}
	});

	///=============  Testimonial Two  =============\\\
	var swiper = new Swiper(".testimonial__two-slider-active", {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 1,
		fadeIn: true,
		speed: 1500,
		nav: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			1200: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
		}
	});

	///=============  Services Two  =============\\\
	var swiper = new Swiper(".services__two-slider", {
		slidesPerView: 4,
		loop: true,
		speed: 1500,
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1400: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
		}
	});

	///=============  Services Three  =============\\\
	var swiper = new Swiper(".services__three-slider", {
		slidesPerView: 3,
		loop: true,
		speed: 1500,
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3,
			},
		}
	});

	///=============  Banner Two Slider  =============\\\
	var swiper = new Swiper(".banner__two-slider", {
		slidesPerView: 1,
		loop: true,
		speed: 800,
		effect: "fade",
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 1,
			},
			992: {
				slidesPerView: 1,
			},
		}
	});

	///=============  Banner Three Slider  =============\\\
	var swiper = new Swiper(".banner__three-slider", {
		slidesPerView: 1,
		loop: true,
		speed: 800,
		effect: "fade",
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 1,
			},
			992: {
				slidesPerView: 1,
			},
		}
	});
	///=============  Blog Active Hover  =============\\\
	$(".blog__three-item").on("hover",function() {
		$(".blog__three-item").removeClass("blog__three-item-hover");
		$(this).addClass("blog__three-item-hover");
	});	

	///=============  CounterUp  =============\\\
	var counter = $('.counter');
	counter.counterUp({
		time: 2500,
		delay: 100
	});
	///=============  Video Popup  =============\\\
	$('.video-popup').magnificPopup({
		type: 'iframe'
	});
	///=============  Image Popup  =============\\\
	$('.img-popup').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	///=============  FAQ One =============\\\
	$(".faq-collapse-item-card-header").on("click",function() {
		if ($(this).next(".faq-collapse-item-card-header-content").hasClass("active")) {
			$(this).next(".faq-collapse-item-card-header-content").removeClass("active").slideUp()
			$(this).children("i").removeClass("fas fa-minus-circle").addClass("fas fa-plus-circle")
		} else {
			$(".faq-collapse-item-card-header-content").removeClass("active").slideUp()
			$(".faq-collapse-item-card-header i").removeClass("fas fa-minus-circle").addClass("fas fa-plus-circle");
			$(this).next(".faq-collapse-item-card-header-content").addClass("active").slideDown()
			$(this).children("i").removeClass("fas fa-plus-circle").addClass("fas fa-minus-circle")
		}
	});
	$(".faq-collapse-item-card").on("click",function() {
        $('.faq-collapse-item-card').removeClass('active');
		
        $(this).addClass('active');
	});

	///=============  Theme Loader  =============\\\
	$(window).on("load", function() {
		$(".loader").fadeOut(500);
	});

	///=============  Scroll Slider  =============\\\
	$(document).ready(function () {
		$('.horizontal-scroll-active').slick({
			speed: 12000,
			autoplay: true,
			autoplaySpeed: 0,
			centerMode: true,
			cssEase: 'linear',
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
			infinite: true,
			initialSlide: 1,
			arrows: false,
			buttons: false,
			responsive: [
				{
					breakpoint: 1200,
				},
				{
					breakpoint: 992,
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
	});
	///============= Scroll To Top =============\\\
	var scrollPath = document.querySelector('.scroll-up path');
	var pathLength = scrollPath.getTotalLength();
	scrollPath.style.transition = scrollPath.style.WebkitTransition = 'none';
	scrollPath.style.strokeDasharray = pathLength + ' ' + pathLength;
	scrollPath.style.strokeDashoffset = pathLength;
	scrollPath.getBoundingClientRect();
	scrollPath.style.transition = scrollPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
	var updatescroll = function() {
		var scroll = $(window).scrollTop();
		var height = $(document).height() - $(window).height();
		var scroll = pathLength - (scroll * pathLength / height);
		scrollPath.style.strokeDashoffset = scroll;
	}
	updatescroll();
	$(window).scroll(updatescroll);
	var offset = 50;
	var duration = 950;
	jQuery(window).on('scroll', function() {
		if(jQuery(this).scrollTop() > offset) {
			jQuery('.scroll-up').addClass('active-scroll');
		} else {
			jQuery('.scroll-up').removeClass('active-scroll');
		}
	});
	jQuery('.scroll-up').on('click', function(event) {
		event.preventDefault();
		jQuery('html, body').animate({
			scrollTop: 0
		}, duration);
		return false;
	});
	///=============  Isotope  =============\\\
	$(window).on('load', function(){
		var $grid = $('.project-filter-active').isotope();
		$('.project__area-filter-button').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue
			});
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
		});
   });		

   ///==================== Tooltips =====================\\\
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	 return new bootstrap.Tooltip(tooltipTriggerEl)
   })
   
   

///=========================== Download DAily Quote ======================\\\
document.querySelectorAll('.download-link').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        const image = this.getAttribute('href'); // Get the href attribute of the link
        
        const downloadLink = document.createElement('a');
        downloadLink.href = image; // Set the href to the image source

  // Set a default name for the downloaded file
  const defaultFileName = 'word-of-the-day.jpg'; // Change this to whatever default name you want
  downloadLink.download = defaultFileName; // Use the default name

        document.body.appendChild(downloadLink);
        downloadLink.click(); // Programmatically click the link to trigger the download
        document.body.removeChild(downloadLink); // Clean up
    });
});




/// ============================ Search for Sermon by name ===================================///
// Get the search input field and the audio items
const searchInput = document.getElementById('search-audio');
const audioItems = document.querySelectorAll('.item');

// Add event listener for input changes
searchInput.addEventListener('input', function() {
    const query = searchInput.value.toLowerCase(); // Get the user's search query in lowercase
    
    // Loop through each audio item to check if it matches the search query
    audioItems.forEach(item => {
        const audioTitle = item.getAttribute('data-audio-title').toLowerCase(); // Get the audio title in lowercase
        
        if (audioTitle.includes(query)) {
            item.style.display = ''; // Show the item if it matches the query
        } else {
            item.style.display = 'none'; // Hide the item if it doesn't match the query
        }
    });
});




///=========================== Download Sermon, Share link & Listen ======================\\\

document.querySelectorAll('.download-audio').forEach(icon => {
    icon.addEventListener('click', function (event) {
        const sermonaudioLink = this.getAttribute('data-audio-link'); // Get audio link from data attribute

        const sermondownloadLink= document.createElement('a');
        sermondownloadLink.href = sermonaudioLink; // Set the href to the audio file source
        sermondownloadLink.download = ''; // Use original filename
        document.body.appendChild(sermondownloadLink);
        sermondownloadLink.click(); // Programmatically click the link to trigger the download
        document.body.removeChild(sermondownloadLink); // Clean up
    });
});


// For Hosted website use

// document.querySelectorAll('.share-audio').forEach(icon => {
//     icon.addEventListener('click', function () {
//         const audioLink = this.getAttribute('data-audio-link'); // Get the audio file path from the data attribute
//         const fullUrl = window.location.origin + '/' + audioLink; // Combine the origin with the file path to generate the full URL
        
//         // Copy the full URL to the clipboard
//         navigator.clipboard.writeText(fullUrl).then(() => {
//             // Create a notification element
//             const notification = document.createElement('div');
//             notification.classList.add('notification');
//             notification.innerText = 'Sermon link copied to clipboard!';
            
//             // Append the notification to the body (or any other container)
//             document.body.appendChild(notification);
            
//             // Set a timeout to remove the notification after 5 seconds (5000ms)
//             setTimeout(() => {
//                 document.body.removeChild(notification);
//             }, 5000); // You can adjust this to 7000 for 7 seconds
//         });
//     });
// });




// For Local use

document.querySelectorAll('.share-audio').forEach(icon => {
    icon.addEventListener('click', function () {
        const audioLink = this.getAttribute('data-audio-link'); // Get the audio link from the data attribute
        
        // Copy the audio link to the clipboard
        navigator.clipboard.writeText(audioLink).then(() => {
            // Create a notification element
            const notification = document.createElement('div');
            notification.classList.add('notification');
            notification.innerText = 'Sermon link copied to clipboard!';
            
            // Append the notification to the body (or any other container)
            document.body.appendChild(notification);
            
            // Set a timeout to remove the notification after 5 seconds (5000ms)
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 5000); // You can adjust this to 7000 for 7 seconds
        });
    });
});



// Existing code to handle listen icon click
//document.querySelectorAll('.listen-audio').forEach(icon => {
   // icon.addEventListener('click', function () {
    //    const sermonImage = this.closest('.blog__one-single-blog').querySelector('.blog__one-single-blog-image img').src;
    //    const sermonAudio = this.closest('.blog__one-single-blog').querySelector('audio source').src;

        // Set the modal content
    //    document.getElementById('sermonImage').src = sermonImage;
  //      document.getElementById('sermonAudio').src = sermonAudio;

        // Show the modal
  //      const sermonModal = new bootstrap.Modal(document.getElementById('sermonModal'));
 //       sermonModal.show();
 //   });
//});

// Stop audio when modal is closed
//document.getElementById('sermonModal').addEventListener('hidden.bs.modal', function () {
   // const audioElement = document.getElementById('sermonAudio');
   // audioElement.pause(); // Pause the audio
 //   audioElement.currentTime = 0; // Reset to the beginning
//});

document.querySelectorAll('.listen-audio').forEach(icon => {
    icon.addEventListener('click', function () {
        // Get data attributes from the clicked icon
        const sermonImage = this.closest('.blog__one-single-blog').querySelector('.blog__one-single-blog-image img').src;
       const sermonAudio = this.closest('.blog__one-single-blog').querySelector('audio source').src;
        const sermonDescription = this.getAttribute('data-sermon-description');

        // Set the modal content
        document.getElementById('sermonImage').src = sermonImage;
        document.getElementById('sermonAudio').src = sermonAudio;
        document.getElementById('sermonDescription').innerHTML = sermonDescription; // Use innerHTML to inject structured content

        // Show the modal
        const sermonModal = new bootstrap.Modal(document.getElementById('sermonModal'));
        sermonModal.show();
    });
});

// Stop audio when modal is closed
// document.getElementById('sermonModal').addEventListener('hidden.bs.modal', function () {
//     const audioElement = document.getElementById('sermonAudio');
//     audioElement.pause(); // Pause the audio
//     audioElement.currentTime = 0; // Reset to the beginning
// });



})(jQuery);