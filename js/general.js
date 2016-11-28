(function ($) {
    $('table').basictable();

    $('#primary-menu').smartmenus({
        hideDuration: 500,
        hideOnClick: true,
        focusActivated: true,
        markCurrentItem: true,
        subMenusMinWidth: 200,
        subIndicatorsPos: 'append',
        subIndicatorsText: ' <i class="fa fa-caret-down" aria-hidden="true"></i>'
    });

    $(document).ready(function () {
        $('.search-icon').click(function () {
            $('.toggle-search').toggle();
        });
        if ($(window).width() >= 944) {
            $('#primary').css('width', '100%').css('width', '-=280px');
        } else {
            $('#primary').css('width', '100%');
        }
    });

    $(window).resize(function () {
        if ($(window).width() < 900) {
            $('#site-navigation').removeClass('sticky-nav');
            $('.site-branding').removeClass('sticky-nav-fill');
            $('#site-navigation').removeClass('sticky-nav-fill-admin');
        }
        if ($(window).width() >= 944) {
            $('#primary').css('width', '100%').css('width', '-=280px');
        } else {
            $('#primary').css('width', '100%');
        }
    });


    var navHeight = $('#site-navigation').height();
    $(window).scroll(function () {
        if ($(window).width() > 899) {
            var navOffSet = $('#nav-marker').offset().top - navHeight;
            var scrollPosition = $(window).scrollTop();
            if (scrollPosition >= navOffSet) {
                if ($('#wpadminbar').length) {
                    $('#site-navigation').addClass('sticky-nav-fill-admin');
                }
                $('#site-navigation').addClass('sticky-nav');
                $('.site-branding').addClass('sticky-nav-fill');
            } else if (scrollPosition < navOffSet) {
                $('#site-navigation').removeClass('sticky-nav');
                $('.site-branding').removeClass('sticky-nav-fill');
                if ($('#wpadminbar').length) {
                    $('#site-navigation').removeClass('sticky-nav-fill-admin');
                }
            }
        }
    });
})(jQuery);

