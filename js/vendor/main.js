jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MqL = 1170;
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile - open lateral menu clicking on the menu icon
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		if( $('.cd-main-content').hasClass('nav-is-visible') ) {
			closeNav();
			$('.cd-overlay').removeClass('is-visible');
		} else {
			$(this).addClass('nav-is-visible');
			$('.cd-primary-nav').addClass('nav-is-visible');
			$('.cd-main-header').addClass('nav-is-visible');
			$('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
			toggleSearch('close');
			$('.cd-overlay').addClass('is-visible');
		}
	});

	//open search form
	$('.cd-search-trigger').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});

	//close lateral menu on mobile 
	$('.cd-overlay').on('swiperight', function(){
		if($('.cd-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.cd-overlay').removeClass('is-visible');
		}
	});
	$('.nav-on-left .cd-overlay').on('swipeleft', function(){
		if($('.cd-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.cd-overlay').removeClass('is-visible');
		}
	});
	$('.cd-overlay').on('click', function(){
		closeNav();
		toggleSearch('close')
		$('.cd-overlay').removeClass('is-visible');
	});


	//prevent default clicking on direct children of .cd-primary-nav 
	$('.cd-primary-nav').children('.has-children').children('a').on('click', function(event){
		event.preventDefault();
	});
	//open submenu
	$('.has-children').children('a').on('click', function(event){
		if( !checkWindowWidth() ) event.preventDefault();
		var selected = $(this);
		if( selected.next('ul').hasClass('is-hidden') ) {
			//desktop version only
			selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
			selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
			$('.cd-overlay').addClass('is-visible');
		} else {
			selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
			$('.cd-overlay').removeClass('is-visible');
		}
		toggleSearch('close');
	});

	//submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

	function closeNav() {
		$('.cd-nav-trigger').removeClass('nav-is-visible');
		$('.cd-main-header').removeClass('nav-is-visible');
		$('.cd-primary-nav').removeClass('nav-is-visible');
		$('.has-children ul').addClass('is-hidden');
		$('.has-children a').removeClass('selected');
		$('.moves-out').removeClass('moves-out');
		$('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$('body').removeClass('overflow-hidden');
		});
	}

	function toggleSearch(type) {
		if(type=="close") {
			//close serach 
			$('.cd-search').removeClass('is-visible');
			$('.cd-search-trigger').removeClass('search-is-visible');
			$('.cd-overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.cd-search').toggleClass('is-visible');
			$('.cd-search-trigger').toggleClass('search-is-visible');
			$('.cd-overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
			($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
		}
	}

	function checkWindowWidth() {
		//check window width (scrollbar included)
		var e = window, 
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
			return true;
		} else {
			return false;
		}
	}

	function moveNavigation(){
		var navigation = $('.cd-nav');
  		var desktop = checkWindowWidth();
        if ( desktop ) {
			navigation.detach();
			navigation.insertBefore('.cd-header-buttons');
		} else {
			navigation.detach();
			navigation.insertAfter('.cd-main-content');
		}
	}
});


//  Maps code
          $('.map-container')
            .click(function(){
                $(this).find('iframe').addClass('clicked')})
            .mouseleave(function(){
                $(this).find('iframe').removeClass('clicked')});


// TEAM PopUP

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );


// Modal Effects TEAM POPUP

var ModalEffects = (function() {

	function init() {

		var overlay = document.querySelector( '.md-overlay' );

		[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

			var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
				close = modal.querySelector( '.md-close' );

			function removeModal( hasPerspective ) {
				classie.remove( modal, 'md-show' );

				if( hasPerspective ) {
					classie.remove( document.documentElement, 'md-perspective' );
				}
			}

			function removeModalHandler() {
				removeModal( classie.has( el, 'md-setperspective' ) ); 
			}

			el.addEventListener( 'click', function( ev ) {
				classie.add( modal, 'md-show' );
				overlay.removeEventListener( 'click', removeModalHandler );
				overlay.addEventListener( 'click', removeModalHandler );

				if( classie.has( el, 'md-setperspective' ) ) {
					setTimeout( function() {
						classie.add( document.documentElement, 'md-perspective' );
					}, 25 );
				}
			});

			close.addEventListener( 'click', function( ev ) {
				ev.stopPropagation();
				removeModalHandler();
			});

		} );

	}

	init();

})();


/***************** Smooth Scrolling ******************/

$(function() {

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1900);
				return false;
			}
		}
	});

});



/***************** Navigation Bar ******************/


$('#mainNav').affix({
  offset: {
    top: 60
  }
})


/***************** Team More information Popupit ******************/

// ;( function( window ) {
	
// 	'use strict';

// 	var support = { animations : Modernizr.cssanimations },
// 		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
// 		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
// 		onEndAnimation = function( el, callback ) {
// 			var onEndCallbackFn = function( ev ) {
// 				if( support.animations ) {
// 					if( ev.target != this ) return;
// 					this.removeEventListener( animEndEventName, onEndCallbackFn );
// 				}
// 				if( callback && typeof callback === 'function' ) { callback.call(); }
// 			};
// 			if( support.animations ) {
// 				el.addEventListener( animEndEventName, onEndCallbackFn );
// 			}
// 			else {
// 				onEndCallbackFn();
// 			}
// 		};

// 	function extend( a, b ) {
// 		for( var key in b ) { 
// 			if( b.hasOwnProperty( key ) ) {
// 				a[key] = b[key];
// 			}
// 		}
// 		return a;
// 	}

// 	function DialogFx( el, options ) {
// 		this.el = el;
// 		this.options = extend( {}, this.options );
// 		extend( this.options, options );
// 		this.ctrlClose = this.el.querySelector( '[data-dialog-close]' );
// 		this.isOpen = false;
// 		this._initEvents();
// 	}

// 	DialogFx.prototype.options = {
// 		// callbacks
// 		onOpenDialog : function() { return false; },
// 		onCloseDialog : function() { return false; }
// 	}

// 	DialogFx.prototype._initEvents = function() {
// 		var self = this;

// 		// close action
// 		this.ctrlClose.addEventListener( 'click', this.toggle.bind(this) );

// 		// esc key closes dialog
// 		document.addEventListener( 'keydown', function( ev ) {
// 			var keyCode = ev.keyCode || ev.which;
// 			if( keyCode === 27 && self.isOpen ) {
// 				self.toggle();
// 			}
// 		} );

// 		this.el.querySelector( '.dialog__overlay' ).addEventListener( 'click', this.toggle.bind(this) );
// 	}

// 	DialogFx.prototype.toggle = function() {
// 		var self = this;
// 		if( this.isOpen ) {
// 			classie.remove( this.el, 'dialog--open' );
// 			classie.add( self.el, 'dialog--close' );
			
// 			onEndAnimation( this.el.querySelector( '.dialog__content' ), function() {
// 				classie.remove( self.el, 'dialog--close' );
// 			} );

// 			// callback on close
// 			this.options.onCloseDialog( this );
// 		}
// 		else {
// 			classie.add( this.el, 'dialog--open' );

// 			// callback on open
// 			this.options.onOpenDialog( this );
// 		}
// 		this.isOpen = !this.isOpen;
// 	};

// 	// add to global namespace
// 	window.DialogFx = DialogFx;

// })( window );

// /* call */


// 			(function() {

// 				var dlgtrigger = document.querySelector( '[data-dialog]' ),
// 					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
// 					dlg = new DialogFx( somedialog );

// 				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

// 			})();





		
// POPUP BOOTSRAP

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})