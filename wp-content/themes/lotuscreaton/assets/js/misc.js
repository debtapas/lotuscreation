    var tpj=jQuery;

    var revapi1014;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_1014_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_1014_1");
    }else{
    revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
    sliderType:"standard",
    jsFileLocation:"revolution/js/",
    sliderLayout:"fullscreen",
    dottedOverlay:"none",
    delay:9000,
    navigation: {
      keyboardNavigation:"off",
      keyboard_direction: "horizontal",
      mouseScrollNavigation:"off",
      mouseScrollReverse:"default",
      onHoverStop:"off",
      touch:{
        touchenabled:"on",
        swipe_threshold: 75,
        swipe_min_touches: 1,
        swipe_direction: "horizontal",
        drag_block_vertical: false
      }
      ,
      arrows: {
        style:"uranus",
        enable:true,
        hide_onmobile:true,
        hide_under:768,
        hide_onleave:false,
        tmp:'',
        left: {
          h_align:"left",
          v_align:"center",
          h_offset:20,
          v_offset:0
        },
        right: {
          h_align:"right",
          v_align:"center",
          h_offset:20,
          v_offset:0
        }
      }
    },
    responsiveLevels:[1240,1024,778,480],
    visibilityLevels:[1240,1024,778,480],
    gridwidth:[1240,1024,778,480],
    gridheight:[868,768,960,600],
    lazyType:"none",
    shadow:0,
    spinner:"off",
    stopLoop:"on",
    stopAfterLoops:0,
    stopAtSlide:1,
    shuffle:"off",
    autoHeight:"off",
    fullScreenAutoWidth:"off",
    fullScreenAlignForce:"off",
    fullScreenOffsetContainer: "",
    fullScreenOffset: "60px",
    disableProgressBar:"on",
    hideThumbsOnMobile:"off",
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    debugMode:false,
    fallbacks: {
      simplifyAll:"off",
      nextSlideOnWindowFocus:"off",
      disableFocusListener:false,
    }
    });
    }

        RsTypewriterAddOn(tpj, revapi1014);
    });	/*ready*/


  $( document ).ready(function() {

      /* Basic Gallery */
      $( '.swipebox' ).swipebox();
      
      /* Video */
      $( '.swipebox-video' ).swipebox();

      /* Dynamic Gallery */
      $( '#gallery' ).on( 'click', function( e ) {
        e.preventDefault();
        $.swipebox( [
          { href : 'gallery/images/big-1.jpg', title : 'My Caption' },
          { href : 'gallery/images/big-2.jpg', title : 'My Second Caption' }
        ] );
      } );

      /* Smooth scroll */
      $( '.scroll' ).on( 'click', function () {
        $( 'html, body' ).animate( { scrollTop: $( $( this ).attr('href') ).offset().top - 15 }, 750 ); // Go
        return false;
      });
      } );

      /* Pagination */
      $('#example').paginate();

//-------------------------------------------------------
  //Jquery to add anchor tag class
//----------------------------------------------------------
$(function(){
    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.navbar-nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});