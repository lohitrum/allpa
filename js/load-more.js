// Inifnite scroll
/*
jQuery(function($){

	$('.post-listing .row').append( '<span class="load-more"></span>' );
	var button = $('.post-listing .row .load-more');
	var page = 2;
	var loading = false;
	var scrollHandling = {
	    allow: true,
	    reallow: function() {
	        scrollHandling.allow = true;
	    },
	    delay: 400 //(milliseconds) adjust to the highest acceptable value
	};

	$(window).scroll(function(){
		if( ! loading && scrollHandling.allow ) {
			scrollHandling.allow = false;
			setTimeout(scrollHandling.reallow, scrollHandling.delay);
			var offset = $(button).offset().top - $(window).scrollTop();
            var $rpta = "";
			if( 2000 > offset ) {
				loading = true;
				var data = {
					action: 'be_ajax_load_more',
					page: page,
					query: beloadmore.query,
				};                
				$.post(beloadmore.url, data, function(res) {
					if( res.success) {
						//$('.post-listing').append( res.data );						
                        $lentes = res.data;
                        $.each($lentes, function( index, value ) {
                            $rpta += '<div id="producto-'+value.id+'" class="col-md-4">';
                            $rpta += '<div class="item item--catalogo">';                            
                            $rpta += '<a class="catalogo__image__wrap" href="'+value.titulo+'"><img id="imagen-'+value.id+'" src="'+value.thumb+'" /></a>';
                            $rpta += '<h3>'+value.titulo+'</h3>';
                            $rpta += '<p class="catalogo__categoria">'+value.subtitulo+'</p>';
                            $rpta += '<div class="js-item__colores item__colores owl-carousel owl-theme">'+value.colores+'</div>';
                            $rpta += '</div>';
                            $rpta += '</div>';
                        });
                        $('.post-listing .row').append( $rpta );
                        $('.post-listing').append( button );
						page = page + 1;
						loading = false;
					} else {
						// console.log(res);
					}
				}).fail(function(xhr, textStatus, e) {
					// console.log(xhr.responseText);
				});

			}
		}
	});
});
*/




jQuery(function($){
    //$('.post-listing .row').append( '<a href="#" class="load-more btn btn-primary">Cargar más</a>' );
    var button = $('.post-listing .load-more');
    var page = 2;
    var loading = false;
    
	
    $(button).on("click", function(e){
        e.preventDefault();
        loading = true;
				var data = {
					action: 'be_ajax_load_more',
					page: page,
					query: beloadmore.query,
				};  
        
        $.post(beloadmore.url, data, function(res) {
            var $rpta = "";
					if( res.success) {
						//$('.post-listing').append( res.data );						
                        $lentes = res.data;
                        
                        if($lentes.length > 0) {
                        $.each($lentes, function( index, value ) {
                            $rpta += '<div id="producto-'+value.id+'" class="col-md-4">';
                            $rpta += '<div class="item item--catalogo">';                            
                            $rpta += '<a class="catalogo__image__wrap" href="'+value.titulo+'"><img id="imagen-'+value.id+'" src="'+value.thumb+'" /></a>';
                            $rpta += '<h3>'+value.titulo+'</h3>';
                            $rpta += '<p class="catalogo__categoria">'+value.subtitulo+'</p>';
                            $rpta += '<div class="js-item__colores item__colores owl-carousel owl-theme">'+value.colores+'</div>';
                            $rpta += '</div>';
                            $rpta += '</div>';
                        });
                        $('.post-listing .row').append( $rpta );
                        $('.post-listing .catalogo__footer').append( button );
                        } else {
                            $(button).hide();
                        }
						page = page + 1;
						loading = false;
					} else {
						// console.log(res);
					}
				}).fail(function(xhr, textStatus, e) {
					// console.log(xhr.responseText);
				});
    });
    
});


