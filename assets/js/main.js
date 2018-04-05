!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		/* Show menu desktop/mobile */
		function ExciterShowMenuType() {
			var screen_width = $(window).width();
			
			if(screen_width <= option_ob.enable_mobile){
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').hide();
				$('.bt-header .bt-header-mobile').show();
			}else{
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').show();
				$('.bt-header .bt-header-mobile').hide();
			}
		}
		ExciterShowMenuType();
		
		/* Toggle menu mobile */
		function ExciterToggleMenuMobile() {
			$('.bt-header .bt-header-mobile .bt-menu-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-header .bt-menu-mobile').toggle('slow');
			});
		}
		ExciterToggleMenuMobile();
		
		/* Toggle sub menu vertical */
		function ExciterToggleSubMenuVertical() {
			var hasChildren = $('.bt-header .bt-header-mobile ul li.menu-item-has-children, .bt-header-vertical .bt-vertical-menu-wrap ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<span class="menu-toggle"></span>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('active');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		ExciterToggleSubMenuVertical();
		
		/* Header Stick */
		function ExciterHeaderStick() {
			if($( '.bt-header' ).hasClass( 'bt-stick' )) {
				var h_menu = $('.bt-header .bt-header-desktop .bt-subheader.bt-bottom'),
					h_menu_info = {top: h_menu.offset().top, height: h_menu.innerHeight()};
				
				if ($(window).scrollTop() > (h_menu_info.top + h_menu_info.height)){
					$( '.bt-header .bt-header-stick' ).addClass('active');
				}
				if($(window).scrollTop() < (h_menu_info.top + h_menu_info.height + 90)){
					$( '.bt-header .bt-header-stick' ).removeClass('active');
				}
				
			}
			
			
		}
		ExciterHeaderStick();
		
		/* Menu Canvas */
		function ExciterMenuCanvas() {
			$('.bt-header .bt-menu-canvas-toggle').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
			$('#bt_menu_canvas').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
		}
		ExciterMenuCanvas();
		
		/* Header Vertical */
		function ExciterHeaderVertical() {
			var w_screen = parseInt(window.innerWidth),
				w_main,
				e_hvertical = $('.header-vertical .bt-header-vertical'),
				e_main = $('.header-vertical .bt-titlebar, .header-vertical .bt-main-content, .header-vertical .bt-footer'),
				h_screen = parseInt(window.innerHeight),
				h_menu,
				e_menu = $('.bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap');
			
			/* width header */
			if(w_screen > option_ob.enable_mobile){
				if(w_screen > option_ob.hvertical_width){
					w_main = w_screen - parseInt(option_ob.hvertical_width);
					e_hvertical.css("width", option_ob.hvertical_width);
					e_main.css("width", w_main);
				}else{
					w_main = w_screen - 320;
					e_hvertical.css("width", "320px");
					e_main.css("width", w_main);
				}
			}
			
			/* height menu */
			if(option_ob.hvertical_full_height){
				if(h_screen > 900){
					h_menu = parseInt(option_ob.hvertical_menu_height) + (h_screen - 900);
					e_menu.css("height", h_menu);
				}else{
					h_menu = parseInt(option_ob.hvertical_menu_height) - (900 - h_screen);
					e_menu.css("height", h_menu);
				}
			}
		}
		ExciterHeaderVertical();
		
		/* Toggle Header Vertical Mobile */
		function ExciterToggleHeaderVerticalMobile() {
			$('.header-vertical .bt-menu-toggle').on('click', function() {
				$('.header-vertical  .bt-header-vertical').toggleClass('active');
				$(this).toggleClass('active');
			});
		}
		ExciterToggleHeaderVerticalMobile();
		
		/* Header Mini Vertical */
		function ExciterHeaderMiniVertical() {
			$('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-menu-toggle').on('click', function() {
				$('.header-minivertical .bt-header-minivertical').toggleClass('active');
				$(this).toggleClass('active');
			});
		}
		ExciterHeaderMiniVertical();
		
		
		/* Easy Scroll */
		function ExciterEasingScroll() {
			var $root = $('html, body');
			$('.header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a,.header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a, .bt-header-onepage .bt-menu-list ul > li > a').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: $(href).offset().top
				}, 700, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		ExciterEasingScroll();
		
		/* Active Menu Item Scroll  */
		function ExciterActiveMenuItemScroll() {
			var scroll_pos = $(window).scrollTop() + 1;
			var sec_attr = [];
 
			$('.header-onepage .vc_section, .header-onepagescroll .vc_section').each(function(){
				sec_attr.push([$(this).attr('id'), $(this).offset().top]);
			});

			$.each(sec_attr, function( index, value ) {
				if(scroll_pos >= value[1] && scroll_pos < value[1] + $('#' + value[0]).innerHeight()){
					$('.header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li, .header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li, .bt-header-onepage .bt-menu-list ul > li').removeClass('current-menu-item');
					$('.header-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a[href="#' + value[0] +'"], .header-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a[href="#' + value[0] +'"], .bt-header-onepage .bt-menu-list ul > li > a[href="#' + value[0] +'"]').parent().addClass('current-menu-item');
				}
			});
		}
		ExciterActiveMenuItemScroll();
		
		/* Footer Stick */
		function ExciterFooterStick() {
			if($( '.bt-footer' ).hasClass( 'bt-stick' )) {
				var h_footer = $('.bt-footer').innerHeight();
				$('#bt-main .bt-header').css({"position": "relative", "z-index": "999"});
				$('#bt-main .bt-titlebar').css({"position": "relative", "z-index": "3"});
				$('#bt-main .bt-main-content').css({"position": "relative", "background": "#ffffff", "z-index": "3", "margin-bottom": h_footer});
			}
			
			
		}
		ExciterFooterStick();
		
		/* Nice Scroll Bar */
		function ExciterNiceScrollBar() {
			if(option_ob.nice_scroll_bar && option_ob.nice_scroll_bar_element){
				$(option_ob.nice_scroll_bar_element).niceScroll({
					cursorcolor:"#4d4d4d",
					cursorborder:"0px",
					cursorwidth:"7px",
				});
			}
		}
		ExciterNiceScrollBar()
		
		/* Masonry */
		function ExciterMasonry() {
			if($('.bt-grid-masonry').length > 0) {
				$('.bt-grid-masonry .row').isotope({
					// options
				});
			}
		}
		ExciterMasonry();
		
		/* Callback function when resize screen */
		$(window).on('resize', function() {
			ExciterShowMenuType();
			ExciterActiveMenuItemScroll();
			ExciterMasonry();
			ExciterHeaderVertical();
		});
		
		$(window).on('scroll', function() {
			ExciterHeaderStick();
			ExciterActiveMenuItemScroll();
			ExciterMasonry();
		});
		
		
		/* Compatible Ess Grid and VC Animation */
		$('body').on('click', '.esg-filterbutton', function() {
			setTimeout(function(){
				$(window).trigger('resize');
			}, 500);
		});
		
		
		/* Open the hide mini search */
		function ExciterOpenMiniSearchSidebar() {
			$('.bt-mini-search > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').hasClass('active')){
					$('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-search .bt-search-form').toggleClass('active');
			});
		}
		ExciterOpenMiniSearchSidebar();
		
		/* Open the hide mini cart */
		function ExciterOpenMiniCartSidebar() {
			$('.bt-mini-cart > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-search .bt-search-form, .bt-mini-search > a').hasClass('active')){
					$('.bt-mini-search .bt-search-form, .bt-mini-search > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-cart .bt-cart-content').toggleClass('active');
			});
		}
		ExciterOpenMiniCartSidebar();
		
		
		
		
		/* Open the hide menu canvas */
		function BearsthemesOpenMenuSidebar() {
			$('.bt-menu-sidebar > a').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
			$('.bt-menu-canvas-overlay').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
		}
		BearsthemesOpenMenuSidebar();
		
		function BearsthemesCountDownClock() {
			$('.bt-countdown-clock').each(function() {
				var countdownTime = $(this).attr('data-countdown');
				var countdownFormat = $(this).attr('data-format');
				var countdownLabels = $(this).attr('data-labels').split(',');
				var countdownLabels1 = $(this).attr('data-labels1').split(',');
				$(this).countdown({
					until: countdownTime,
					format: countdownFormat,
					labels: countdownLabels,
					labels1: countdownLabels1,
					padZeroes: true
				});
			});
		}
		BearsthemesCountDownClock();
		
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
			$('input.qty', parent).trigger('change');
        });
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
				$('input.qty', parent).trigger('change');
            }
        });
	});
})(jQuery);