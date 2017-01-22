$(function () {
    loaderPage();
    menuActivated();
    scrollTo();
    menu();
    drawBars();
    show();
    toggleMenu();
});

function loaderPage() {
    $(window).load(function () {
        $('#loader-page').fadeOut(1000,
            function () {
                $('body').css({'overflow': 'visible'});
            });
    });
}

function menuActivated() {
    $(window).scroll(function () {
        $('ul.top li a').removeClass('activated');

        var offset = 0;

        if ($(window).width() > 768) {
            offset = $('#header').outerHeight();
        }

        if ($(window).scrollTop() >= $('#contact').offset().top - offset) {
            $('#contactMenu').addClass('activated');
        }
        else if ($(window).scrollTop() >= $('#technologies').offset().top - offset) {
            $('#technologiesMenu').addClass('activated');
        }
        else if ($(window).scrollTop() >= $('#knowledge').offset().top - offset) {
            $('#knowledgeMenu').addClass('activated');
        }
        else if ($(window).scrollTop() >= $('#about').offset().top - offset) {
            $('#aboutMenu').addClass('activated');
        }
    });
}

function scrollTo() {
    $('a.menuLink').on('click', function (e) {
        var offset = 0

        if ($(window).width() > 768) {
            offset = 68;
        }

        $("html, body").stop().animate({scrollTop: $($(this).attr('href')).offset().top - offset}, 2000, "easeInOutExpo");

        e.preventDefault();
    });
}

function menu() {
    var menu = $('#header');
    $(window).scroll(function () {
        var scroll_top = $(window).scrollTop();
        if (scroll_top > 0) {
            menu.css({
                'border-bottom': '3px solid #16A085',
                'background-color': 'rgba(37, 42, 43, 1)',
                'height': '72',
                'box-shadow': 'black 0 0 40px'
            });
        }
        else {
            menu.css({
                'border-bottom': '0',
                'background-color': 'rgba(37, 42, 43, 0.7)',
                'height': '100px',
                'box-shadow': 'black 0 0 0'
            });
        }
    });
}

function drawBars() {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= $('#bar1').offset().top - $(window).height() && $(window).scrollTop() <= $('#bar3').offset().top + 20 - 72) {
            $('.progress-bar').css({'transition': 'width 3s ease'});
            $('#bar1').css({'width': '90%'});
            $('#bar2').css({'width': '80%'});
            $('#bar3').css({'width': '40%'});
        }
        else {
            $('.progress-bar').css({'transition': 'none'});
            $('#bar1').css({'width': '0%'});
            $('#bar2').css({'width': '0%'});
            $('#bar3').css({'width': '0%'});
        }
    });
}

function show() {
    $(document).ready(function () {
        $(window).scroll(function () {
            $('.hiddenObject').each(function (i) {
                var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 2;
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if (bottom_of_window > bottom_of_object)
                    $(this).animate({opacity: '1', transform: 'translateY(0px)'}, 1000);
            });
        });
    });
}

function toggleMenu() {
    $('#mobile').on('click', function (e) {
        $('#header').fadeIn(500);
        e.preventDefault();
    });

    if ($(window).width() <= 768) {
        $('#header').on('click', function (e) {
            $('#header').fadeOut(500);
            e.preventDefault();
        });
    }
}