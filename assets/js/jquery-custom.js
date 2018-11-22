( function($) {

	/* Mobile menu
	----------------------------------------------------- */

	$( '.dropdown-toggle' ).on( 'click', function(){
		$( this ).toggleClass( 'toggled' );
	 	$( this ).next().slideToggle();
	} );

	// Function to show the menu
	function show_menu() {
		$( '.nav-parent' ).addClass( 'mobile-menu-open' );
		$( '.mobile-menu-overlay' ).addClass( 'mobile-menu-active' );
	}

	// Function to hide the menu
	function hide_menu(){
		$( '.nav-parent' ).removeClass( 'mobile-menu-open' );
		$( '.mobile-menu-overlay' ).removeClass( 'mobile-menu-active' );
	}

	$( '.menubar-right' ).on( 'click', show_menu );
	$( '.mobile-menu-overlay' ).on( 'click', hide_menu );
	$( '.menubar-close' ).on( 'click', hide_menu );

	/**
	 * Slick Slider
	 */

	$('.slider-banner').slick( {
		dots			: false,
		arrows			: false,
		autoplay		: true,
		autoplaySpeed	: 10000,
		cssEase			: 'ease-out',
	} );

	$( '.section-one .slide-prev' ).click( function(){
		$( '.slider-banner' ).slick( 'slickPrev' );
	} );

	$( '.section-one .slide-next' ).click( function() {
		$( '.slider-banner' ).slick( 'slickNext' );
	} );

	$('.widget-slider').slick( {
		dots			: false,
		arrows			: false,
		autoplay		: true,
		autoplaySpeed	: 4000,
		cssEase			: 'ease-out',
	} );

	$( '.widget-nav .slide-prev' ).click( function(){
		$( '.widget-slider' ).slick( 'slickPrev' );
	} );

	$( '.widget-nav .slide-next' ).click( function() {
		$( '.widget-slider' ).slick( 'slickNext' );
	} );

	/**
	 * Category Slider Vertical
	 */
	$('.cat-slider-vertical').slick( {
		dots			: false,
		arrows			: false,
		autoplay		: true,
		autoplaySpeed	: 5000,
		vertical		: true,
		slidesToShow	: 5,
		cssEase			: 'ease-out',
	} );

	$( '.cat-slider-vertical-nav .slide-prev' ).click( function(){
		$( '.cat-slider-vertical' ).slick( 'slickPrev' );
	} );

	$( '.cat-slider-vertical-nav .slide-next' ).click( function() {
		$( '.cat-slider-vertical' ).slick( 'slickNext' );
	} );

	/**
	 * Js Marquee
	 */
	$('.marquee').marquee({
		//speed in milliseconds of the marquee in milliseconds
		duration: 30000,
		//gap in pixels between the tickers
		gap: 0,
		//time in milliseconds before the marquee will start animating
		delayBeforeStart: 0,
		//'left' or 'right'
		direction: 'left',
		//true or false - should the marquee be duplicated to show an effect of continues flow
		duplicated: true,
		pauseOnHover: true,
		startVisible: true
	});

	$( '.zoom' ).on( {
		mouseover: function () {
			$( this ).find( 'img' ).addClass( 'zoom-in' ).removeClass( 'zoom-out' );
		},

		mouseleave: function() {
			$( this ).find( 'img' ).addClass( 'zoom-out' ).removeClass( 'zoom-in' );
		}
	} );

} )( jQuery );