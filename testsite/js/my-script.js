jQuery(document).ready(function ($) {
    $('a[href^="#"]').click(function () {
        var speed = 500; // スクロール速度をミリ秒で設定
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 100; // スクロール位置を取得して、80px分下げる
        $('body,html').animate({ scrollTop: position }, speed, 'swing'); // スクロールの実行
        return false; // リンクを無効にする
    });
    
});

function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

    var elemTop = jQuery(elem).offset().top;
    var elemBottom = elemTop + jQuery(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop) && (elemBottom >= elemTop) && (elemTop <= docViewBottom));
}

jQuery(window).on('scroll', function () {
    jQuery('.fade-in1').each(function () {
        if (isScrolledIntoView(jQuery(this))) {
            jQuery(this).addClass('show');
        }
    });
});

var delay1 = 300;

jQuery(window).on('scroll', function () {
    jQuery('.fade-in2').each(function () {
        var $this = jQuery(this);
        if (isScrolledIntoView($this)) {
            setTimeout(function () {
                $this.addClass('show');
            }, delay1);
        }
    });
});

var delay2 = 400;

jQuery(window).on('scroll', function () {
    jQuery('.fade-in3').each(function () {
        var $this = jQuery(this);
        if (isScrolledIntoView($this)) {
            setTimeout(function () {
                $this.addClass('show');
            }, delay2);
        }
    });
});

var delay3 = 500;

jQuery(window).on('scroll', function () {
    jQuery('.fade-in4').each(function () {
        var $this = jQuery(this);
        if (isScrolledIntoView($this)) {
            setTimeout(function () {
                $this.addClass('show');
            }, delay3);
        }
    });
});

jQuery(document).ready(function () {
    jQuery('.load-in').each(function (index) {
        var delay = (index + 1) * 300; // 0.5秒ずつ遅延
        var $element = jQuery(this);

        setTimeout(function () {
            $element.addClass('show');
        }, delay);
    });
});

