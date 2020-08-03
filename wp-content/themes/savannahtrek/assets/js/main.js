;(function($){

  // select fancy
  /*[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {  
        new SelectFx(el);
      } );*/

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');
  
  //new WOW().init();

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });
  $menu.find(".menu-item-has-children > a").on('click', function (e) {
    
      e.preventDefault();

  });

 $menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });

$( '.cycle-gallery #gallery-1' ).cycle({
        speed: 600,
        slides: '.gallery-item',
        pager: '.cycle-pager',
        next: '.cycle-next',
        prev: '.cycle-prev'
      });

$('.tours-item-link ').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
 $(".owl-carousel").owlCarousel({
      items : 1,
      autoplay : true,
      loop : true,
      nav : true,
      navText : ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
      autoplayTimeout : 6000
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
 });
 $(".slider-others #gallery-8" ).cycle({
        fx: 'scrollHorz',
        speed: 600,
        slides: '.gallery-item',
        pager: '.cycle-pager',
        next: '.cycle-next',
        prev: '.cycle-prev'
      });
 
 
 // SMOOTH ANCHOR SCROLLING
    var $root = jQuery('html, body');
    jQuery('a.anchor').click(function(e) {
        var href = jQuery.attr(this, 'href');

        if (typeof(jQuery(href)) != 'undefined' && jQuery(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                /*console.log(jQuery(anchor).offset().top);
                console.log(anchor);*/


                $root.animate({
                    scrollTop: jQuery(anchor).offset().top-155
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion se va al home
           window.location.replace('/' + href);
        }
    });

    var lang = $('html').attr('lang').slice(0,2);
   
    
    $.ajax({
          type: 'GET',
          url: '/wp-json/alo/v1/tours?lang='+ lang,//'/api/get_posts/?post_type=tour&count=-1',
          
          success: function(data){
             //console.log(data)
             
            var items = [];

        var select = $('select[name="tour"]').empty();
          $.each(data, function(i,item) {
            select.append( '<option value="'
                                 + $.trim(item.title.rendered) + '">'
                                 + item.title.rendered
                                 + '</option>' ); 


     
      });
    

     select.prepend('<option value="" selected></option>');
    
  






          },
          error:function(e){
             console.log(e);
             //$('div[data-project="'+ post_id +'"]').find('.content-project').html('<p>Ohh Error</p>');
          }
      });

       $('.tours-item-link').on('click',function (e) {
      
      
      //console.log($(this).data('activitie'))
      $('.wpcf7').find('select[name="tour"] option[value="'+ $(this).data('tour') +'"]').attr("selected",true).change();
      

      });

      
 $galleryItems = $('.owl-carousel').find('.gallery-item');

 $galleryItems.each(function( index ) {
  
  $title = $( this ).find('img').data('image-title');
  $( this ).find('figcaption').prepend('<h3>'+ $title +'</h3>');
  
});
  /*$(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });*/
 /*$(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        

          $('.tours-img').height($(".tours").height());
        
        
       
      

     }*/
  

    
})(jQuery);