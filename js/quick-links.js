(function ($) {
    var qHeight;
    var expanded = false;
    $(document).ready(function () {
        yorkuHeader();
    });

    $(window).on('resize', function () {
        qHeight = $('.quick-links-content').height();
        if (!expanded) {
            $('.quick-links-content').css('margin-top', -qHeight);
        }
        if ($(window).width() > 899) {
            $('.central-quick-links').html('Quick Links <i class="fa fa-chevron-down" aria-hidden="true"></i>');
        }
        mobileAdjustments();
    });

    function yorkuHeader() {
        qHeight = $('.quick-links-content').height() + 5;
        mobileAdjustments();
        $('.quick-links-content').css('margin-top', -qHeight);
        $('.quick-links-content').css('display', 'block');
        $('.central-quick-links').click(function () {
            if (!expanded) {
                $('.quick-links-content').animate({
                    marginTop: '+=' + qHeight
                }, 300);
                expanded = true;
                if ($(window).width() > 899) {
                    $('.central-quick-links').html('Quick Links <i class="fa fa-chevron-up" aria-hidden="true"></i>');
                }
            } else {
                $('.quick-links-content').animate({
                    marginTop: '-=' + qHeight
                }, 300);
                expanded = false;
                if ($(window).width() > 899) {
                    $('.central-quick-links').html('Quick Links <i class="fa fa-chevron-down" aria-hidden="true"></i>');
                }
            }

        });

        $('.close-quick-links').click(function () {
            $('.quick-links-content').animate({
                marginTop: '-=' + qHeight
            }, 300);
            expanded = false;
        });
    }

    function mobileAdjustments() {
        if ($(window).width() <= 899) {
            $('.central-quick-links').html('Quick Links');
        } else {
            $('.central-quick-links').html('Quick Links <i class="fa fa-chevron-down" aria-hidden="true"></i>');
        }
    }

})(jQuery);