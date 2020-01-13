'use strict';

$(document).ready(function() {
    /**
     *  SmoothScroll
     */
    $('a[href^="#"]').click(function() {
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });

    /**
     *  inview
     */
    $('.inview').on('inview', function(event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        }
    });

    /**
     *  lazyload
     */
    // $( "img.lazy" ).lazyload({
    //     threshold: 100 ,			// 200pxの距離まで近づいたら表示する
    //     effect: "fadeIn" ,		// じわじわっと表示させる
    //     effect_speed: 1000 ,		// 3秒かけて表示させる
    // });
});