/* trigger when page is ready */

jQuery(document).ready(function (){

  // magnific popup

 //Menu responsive

/*    

 $('#menu-top-menu').slicknav({

    prependTo:'#topmenu',

    ///label:'MENÚ'

    'init': function() { cerrarmenu() },

    'beforeOpen': function(trigger) { abrirmenu() },

     'beforeClose': function(trigger) { cerrarmenu() },

    

});*/



var dataID = $(".btn__cotiza").data("title");

$(".popup__cotiza .formulario__contacto .wpcf7-textarea").val(dataID);

    



if (screen.width >= 768) {

	$('.post-listing').niceScroll({

        cursorcolor: "#e7a128",

        cursoropacitymin: 0.3,

        cursorwidth:"16px",

        cursorborderradius:0,

        background: "#ededed",

        cursorborder: "0"      

    });

}



 // Anchor scroll

    

 $("#menu-item-31 li.current-menu-parent ul.sub-menu a").click(function(event){		

    event.preventDefault();

    $('html,body').animate({scrollTop:$(this.hash).offset().top -150 }, 500);

});

    /******************************

  Acordeon

*******************************/  

$('.js-categorias').on("click", function (e) {

    e.preventDefault();

    $('.catalogo__sidebar').slideToggle(100);

    //$('p').not($(this).next()).slideUp('fast');

});





jQuery('a.btn__cotiza').magnificPopup({

    //removalDelay: 300,

    //mainClass: 'mfp-fade',

    //type: 'inline',

    type: 'inline',     // Custom settings, never mind

    callbacks: {



        open: function() {                        // When you open the

            $('body').css('overflow', 'hidden');  // window, the element

        },                                        // "body" is used "overflow: hidden".



        close: function() {                       // When the window

            $('body').css('overflow', '');        // is closed, the 

        },                                        // "overflow" gets the initial value.



    }    

});

















jQuery("ul.nav-tabs li.nav-item:nth-child(1) .nav-link").addClass("active");

jQuery("ul.nav-tabs li.nav-item:nth-child(1) .nav-link").addClass("show");

jQuery(".tab-content .tab-pane:nth-child(1)").addClass("active");

jQuery(".tab-content .tab-pane:nth-child(1)").addClass("show");



document.addEventListener( 'wpcf7mailsent', function( event ) {

    $('.form__show') .hide();

    $('.form__hide').show();

}, false );



document.addEventListener( 'wpcf7mailsent', function( event ) {

    $('.popup__show') .hide();

    $('.popup__hide').show();

}, false );



function abrirmenu(){

    //console.log("abre");

    $('#topmenu').addClass("abierto");

    $('#topmenu').removeClass("cerrado");

}

function cerrarmenu(){

    //console.log("cierra");

    $('#topmenu').addClass("cerrado");

    $('#topmenu').removeClass("abierto");

}

$('#menu-scroll').slicknav({

    prependTo: '#menuscroll',

    label: '',

    'init': function () {

        cerrarmenu()

    },

    'beforeOpen': function (trigger) {

        abrirmenu()

    },

    'afterClose': function (trigger) {

        cerrarmenu()

    }

});



// $('#menu-top-menu').slicknav({

//     prependTo:'#topmenu' ,

//     label:'Cerrar',

//     'init': function() { cerrarmenu() },

//     'beforeOpen': function(trigger) { abrirmenu() },

//     'afterClose': function(trigger) { cerrarmenu() }



// });

    jQuery('#backto').on('click', function(e) {

        e.preventDefault();

        jQuery('html, body').animate({scrollTop:0}, '300');

    });

    



    

  jQuery('.popup-with-zoom-anim').magnificPopup({

  type: 'inline',



  fixedContentPos: false,

  fixedBgPos: true,



  overflowY: 'auto',



  closeBtnInside: true,

  preloader: false,



  midClick: true,

  removalDelay: 300,

  mainClass: 'my-mfp-zoom-in'

  });

  jQuery("button.reset").click(function(event) {

      jQuery("form.wpcf7-form")[0].reset();

  });

  if (jQuery('#back-to-top').length) {

      var scrollTrigger = 100, // px

          backToTop = function () {

              var scrollTop = $(window).scrollTop();

              if (scrollTop > scrollTrigger) {

                  jQuery('#back-to-top').addClass('show');

              } else {

                  jQuery('#back-to-top').removeClass('show');

              }

          };

      backToTop();

      jQuery(window).on('scroll', function () {

          backToTop();

      });

      jQuery('#back-to-top').on('click', function (e) {

          e.preventDefault();

          jQuery('html,body').animate({

              scrollTop: 0

          }, 700);

      });

  }

});





// Menu fijo arriba

jQuery(function(){

   var shrinkHeader = 1;

    jQuery(window).scroll(function() {

      var scroll = getCurrentScroll();

        if ( scroll >= shrinkHeader ) {

             jQuery('header.header').addClass('fixed');

          }

          else {

              jQuery('header.header').removeClass('fixed');

          }

    });

  function getCurrentScroll() {

      return window.pageYOffset || document.documentElement.scrollTop;

      }

  });







  

  $(function() {

    // Sliders

    $('.owl-slider').owlCarousel({

        loop:true,

        //margin:10,

        nav:true,

        items:1,

        autoplay:true,

        autoplayTimeout:5000,

        dots:false       

    });

      

    $('.owl-pagos').owlCarousel({

      loop:true,

      //margin:10,

      nav:false,

      items:4,        

      dots:true,

      responsive:{

          0:{

              items:1

          },

          600:{

              items:1

          },

          1000:{

              items:1

          }

      }

  });

    

  $('.owl-clientes').owlCarousel({

      loop:true,

      //margin:10,

      nav:true,

      items:5,        

      dots:false,

      responsive:{

          0:{

              items:1

          },

          600:{

              items:3

          },

          1000:{

              items:5

          }

      }

  });

    // Opiniones home

    var owlopinion = $('.owl-carousel');

    

    owlopinion.owlCarousel({

        loop:true,

        margin:30,

        nav:true,

        dots:false,

        autoplay:true,

        autoplayTimeout:7000,

        //navText: [$('.opiniones__aleft'),$('.opiniones__aright')],

        responsive:{

            0:{

                items:1

            },

            600:{

                items:5

            },

            1000:{

                items:6

            }

        }

    });

    

    // $('.slicknav_btn').on("click", function(e) {

    //     e.preventDefault();        

    //     if($( "#topmenu" ).append( $( "a" ).hasClass( "slicknav_open" ))){

    //         $('.header__botones ').addClass("slick__open");

    //     }

      

    // });  



    





    $('.opiniones__aleft').on("click", function(e) {

        e.preventDefault();

        owlopinion.trigger('prev.owl.carousel');

    });   

    

    

    $('.opiniones__aright').on("click", function(e) {

        e.preventDefault();

        owlopinion.trigger('next.owl.carousel');

    });

      

    ///  Filtros de proyectos

    $(".filtro__item").on("click", function(e) {

        e.preventDefault();        

        $estado = $(this).hasClass("activo");

        $filtro = "term--"+$(this).data("filtro");

        

        $(".filtro__item").removeClass("activo");

        $(this).addClass("activo");

        $(".home__categorias--wrap").removeClass("activo");            

        

        if($filtro == "term--all") {            

            $(".home__categorias--wrap").addClass("activo");            

        } else {            

            $('.'+$filtro).addClass("activo");

        }

    });

});



//Tabs

jQuery(document).ready(function(){

	

	jQuery('ul.nav-tabs li.nav-item .nav-link').click(function(){

		var tab_id = jQuery(this).attr('href');



    jQuery('ul.nav-tabs li.nav-item .nav-link').removeClass('active');

    jQuery('ul.nav-tabs li.nav-item .nav-link').removeClass('show');

		jQuery('.tab-content .tab-pane').removeClass('active');

    jQuery('.tab-content .tab-pane').removeClass('show');



    jQuery(this).addClass('active');        

    jQuery(this).addClass('show');  

    jQuery(tab_id).addClass('active');

    jQuery(tab_id).addClass('show');

	})



})





