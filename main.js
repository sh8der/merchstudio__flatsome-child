document.addEventListener("DOMContentLoaded", function(e) {


    ;
    (function() {
        var $slider = jQuery('.cases-model__slider .slider');
        if ($slider) {
            try {
                jQuery('.cases-modal__gallery').on( 'click', '.gallery-col', function() {
                  var index = jQuery(this).index();
                  $slider.flickity( 'select', index );
                });
            } catch(e) {
                // statements
                console.log(e);
            }
        }
    })();


    ;
    (function() {
        var $modalContentViewport = jQuery("#modal-content-here");
        var pastContentToModal = function() {
            var $this = jQuery(this);
            var targetContentSelector = '.' + $this.attr('href').split("#").pop();
            setTimeout(function() {
                $modalContentViewport.html(jQuery(targetContentSelector).html())
            }, 100);
        }
        if ($modalContentViewport.length) {
            jQuery('a[href^=\"#open-modal#\"]').on('click', pastContentToModal);
        }
    })();


    // ;
    // (function() {
    //     var typedNode = document.querySelector('#typed');
    //     if (typedNode) {
    //         try {
    //             var typed = new Typed(typedNode, {
    //                 stringsElement: '#typed-strings',
    //                 loop: true,
    //                 loopCount: Infinity,
    //                 backDelay: 2000,
    //                 backSpeed: 50,
    //                 typeSpeed: 50
    //             });
    //         } catch(e) {
    //             // statements
    //             console.log(e);
    //         }
    //     }
    // })();

})