;
(function ($) {


    // Sticky Footer
    var bumpIt = function () {
            $('body').css('padding-bottom', $('.footer').outerHeight(true));
            $('.footer').addClass('sticky-footer');
        },
        didResize = false;

    $(window).resize(function () {
        didResize = true;
    });
    setInterval(function () {
        if (didResize) {
            didResize = false;
            bumpIt();
        }
    }, 250);

    // Scripts which runs after DOM load

    $(document).ready(function () {
        $("#text-resizer-controls li a").textresizer({
            target: ".textresizer-js",
            type: "cssClass",
            sizes: ["s0", "s1", "s2", "s3"]
        });

        // var always_show = 10;
        // var counter = 1;
        // $('.single_pdf').each(function(){
        //     if(counter > always_show){
        //        $(this).hide();
        //     }
        //   counter++;
        // });

        // $('#show_hide_minutes').click(function(){
        // var counter = 1;
        //   $('.single_pdf').each(function(){
        //     if(counter > always_show){
        //         $(this).toggle('slide');
        //     }
        //     counter++;
        //   });  
        // });        


        //Remove placeholder on click
        $("input,textarea").each(function () {
            $(this).data('holder', $(this).attr('placeholder'));

            $(this).focusin(function () {
                $(this).attr('placeholder', '');
            });

            $(this).focusout(function () {
                $(this).attr('placeholder', $(this).data('holder'));
            });
        });

        //Make elements equal height
        $('.matchHeight').matchHeight();
        $('.anchor_section__nav_title').matchHeight({
            byRow: false
        });
        $('#text-resizer-controls li a').click(function () {
            $('.matchHeight').matchHeight();
            $('.anchor_section__nav_title').matchHeight({
                byRow: false
            });
        });
        // Add fancybox to images
        $('.gallery-item a').attr('rel', 'gallery');
        $('a[rel*="album"], .gallery-item a, .fancybox, a[href$="jpg"], a[href$="png"], a[href$="gif"]').fancybox({
            minHeight: 0,
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
        // rates
        $('.rate__container').click(function (event) {
            event.preventDefault();
            $('.rate_list_main').hide();
            var myDate = $(this).data('id');
            $('.rate_list_single').children('[data-id="' + myDate + '"]').show();
            $('.show-rate-list').addClass('show_on');
            $('html, body').animate({
                scrollTop: $(".show-rate-list").offset().top
            }, 700);
        });
        $('.show-rate-list').click(function () {
            $('.rate_list_main').show();
            $('.rates_and_fees__list_single ').hide();
            $(this).removeClass('show_on');
        });
        // Sticky footer
        $('.footer').find('img').one('load', function () {
            bumpIt();
        }).each(function () {
            if (this.complete) $(this).load();
        });

        // alert close
        $('.close_alert').click(function (event) {
            event.preventDefault();
            $('.banner__alert').hide();
        });
        // mobile menu
        $('.mobile_fa').click(function (event) {
            event.preventDefault();
            $(this).parents('li').toggleClass('active');

        });
        $('#nav-icon').click(function () {
            $(this).toggleClass('open');
            $('.nav_menu_mobile').toggleClass('open');
        });
        if ($(window).width() < 992) {
            $('.logo-container-mobile .header__lang_sel').attr('id', 'lang_sel');
            $('.logo-container .header__lang_sel').removeAttr('id', 'lang_sel');
        } else {
            $('.logo-container .header__lang_sel').attr('id', 'lang_sel');
            $('.logo-container-mobile .header__lang_sel').removeAttr('id', 'lang_sel');
        }
        $('.header .textresizer_container').hover(function () {
            $('#text-resizer-controls').show(0);
        }, function () {
            $('#text-resizer-controls').hide(0);
        });

    });


    // Scripts which runs after all elements load

    $(window).load(function () {

        //jQuery code goes here


    });

    // Scripts which runs at window resize

    $(window).resize(function () {

        //jQuery code goes here

        if ($(window).width() < 992) {
            $('.logo-container-mobile .header__lang_sel').attr('id', 'lang_sel');
            $('.logo-container .header__lang_sel').removeAttr('id', 'lang_sel');
        } else {
            $('.logo-container .header__lang_sel').attr('id', 'lang_sel');
            $('.logo-container-mobile .header__lang_sel').removeAttr('id', 'lang_sel');
        }


    });


//      


    $('#show_hide_minutes').click(function(){
            $('.spillwrapper').css("height", "100%");
            $('#show_hide_minutes').css("display", "none");
    });

    // add an alert to the fish-lift page IF the user is on Edge or IE 
    if(check_ie_edge()){
        var alert = "Internet Explorer and Edge do not support this video type. Please revisit this page in Chrome or Firefox."
        $('#ie_edge_alert').html(alert);
        console.log('unsupported browser detected.');
    }


}(jQuery));

// check for internet explorer or IE because they can't display our video feed
function check_ie_edge(){


 if (/MSIE 10/i.test(navigator.userAgent)) {
   // This is internet explorer 10
   return true;
}

if (/MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
    // This is internet explorer 9 or 11
    return true;
}

if (/Edge\/\d./i.test(navigator.userAgent)){
    // This is Microsoft Edge
    return true;
    }      

    // or... if nothing has returned yet...
    console.log('not using IE or Edge');
    return false;
}





