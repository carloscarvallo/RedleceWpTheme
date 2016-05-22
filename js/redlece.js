//javascript functions

/* @source: https://github.com/carloscarvallo/RedleceWpTheme
   Copyright (C) 2015-2016  Carlos Carvallo
The JavaScript code in this page is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source. */

(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();

    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox();

    /*
     *  Different effects
     */

    // Change title type, overlay closing speed
    $(".fancybox-effects-a").fancybox({
      helpers: {
        title : {
          type : 'outside'
        },
        overlay : {
          speedOut : 0
        }
      }
    });

    // Disable opening and closing animations, change title type
    $(".fancybox-effects-b").fancybox({
      openEffect  : 'none',
      closeEffect	: 'none',

      helpers : {
        title : {
          type : 'over'
        }
      }
    });

    // Set custom style, close if clicked, change title type and overlay color
    $(".fancybox-effects-c").fancybox({
      wrapCSS    : 'fancybox-custom',
      closeClick : true,

      openEffect : 'none',

      helpers : {
        title : {
          type : 'inside'
        },
        overlay : {
          css : {
            'background' : 'rgba(238,238,238,0.85)'
          }
        }
      }
    });

    // Remove padding, set opening and closing animations, close if clicked and disable overlay
    $(".fancybox-effects-d").fancybox({
      padding: 0,

      openEffect : 'elastic',
      openSpeed  : 150,

      closeEffect : 'elastic',
      closeSpeed  : 150,

      closeClick : true,

      helpers : {
        overlay : null
      }
    });

    /*
     *  Button helper. Disable animations, hide close button, change title type and content
     */

    $('.fancybox-buttons').fancybox({
      openEffect  : 'none',
      closeEffect : 'none',

      prevEffect : 'none',
      nextEffect : 'none',

      closeBtn  : false,

      helpers : {
        title : {
          type : 'inside'
        },
        buttons	: {}
      },

      afterLoad : function() {
        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
      }
    });


    /*
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
     */

    $('.fancybox-thumbs').fancybox({
      prevEffect : 'none',
      nextEffect : 'none',

      closeBtn  : false,
      arrows    : false,
      nextClick : true,

      helpers : {
        thumbs : {
          width  : 50,
          height : 50
        }
      }
    });

    /*
     *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
    */
    $('.fancybox-media')
      .attr('rel', 'media-gallery')
      .fancybox({
        openEffect : 'none',
        closeEffect : 'none',
        prevEffect : 'none',
        nextEffect : 'none',

        arrows : false,
        helpers : {
          media : {},
          buttons : {}
        }
      });

    /*
     *  Open manually
     */

    $("#fancybox-manual-a").click(function() {
      $.fancybox.open('1_b.jpg');
    });

    $("#fancybox-manual-b").click(function() {
      $.fancybox.open({
        href : 'iframe.html',
        type : 'iframe',
        padding : 5
      });
    });

    $("#fancybox-manual-c").click(function() {
      $.fancybox.open([
        {
          href : '1_b.jpg',
          title : 'My title'
        }, {
          href : '2_b.jpg',
          title : '2nd title'
        }, {
          href : '3_b.jpg'
        }
      ], {
        helpers : {
          thumbs : {
            width: 75,
            height: 50
          }
        }
      });
    });
    
    // agregar barra al menu
    function addBar(element) {
        let bar = $(element);
        $('#menu-menu-navegacion').find('li').after(bar);
        $('#menu-menu-navegacion').find('li').last().remove();
    }
    
    addBar('<li><a href="#">/</a></li>');
    
  }); // end of document ready
})(jQuery); // end of jQuery name space