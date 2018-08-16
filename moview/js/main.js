/*global $:false */
jQuery(document).ready(function($){'use strict';

    // Sticky Nav
    $(window).on('scroll', function(){
        if ( $(window).scrollTop() > 0 ) {
            $('#masthead').addClass('sticky');
        } else {
            $('#masthead').removeClass('sticky');
        }
    });
	
	// SOcial Share ADD
	$('.prettySocial').prettySocial();


	/* -------------------------------------- */
	// 	Product Single Page Plus Minus Button
	/* -------------------------------------- */
	if ($('.single-product-details').length) {
		$('.single-product-details .quantity input[type="number"]').attr( 'type','text');
		var html = '<button type="button" class="btn-minus">-</button>'+$('.quantity').html()+'<button type="button" class="btn-plus">+</button>';
		$('.single-product-details .quantity').html(html);
	}
	
	$('.btn-minus').on('click', function(event) { 'use strict';
		var sp = $('.quantity input[name="quantity"]').val();
		if( sp != 1 ){
			$('.quantity input[name="quantity"]').attr( 'value', (parseInt(sp)-1) );
		}
	});
	$('.btn-plus').on('click', function(event) { 'use strict';
		var sp = $('.quantity input[name="quantity"]').val();
		$('.quantity input[name="quantity"]').attr( 'value', (parseInt(sp)+1) );
	});


});