$(document).ready(function () {
    $('.contactus').on('click', function () {
        $(this).fadeOut(1600);
        $('.shadow').fadeIn(1600);
    });
    $('.shadow').on('mouseleave', function () {
        $(this).fadeOut(600);
        $('.contactus').fadeIn(600);
    });
    $('.vacancy').on('click', function () {
        if (!$(this).hasClass('active')) {
            $(this).children('.full_vacancy').slideDown();
            $(this).addClass('active');
            $(this).children('img').css({
                '-ms-transform': 'rotate(180deg)', /* IE 9 */
                '-webkit-transform': 'rotate(180deg)', /* Chrome, Safari, Opera */
                'transform': 'rotate(180deg)'
            })
        }
        else {
            $(this).children('.full_vacancy').slideUp();
            $(this).removeClass('active');
            $(this).children('img').css({
                '-ms-transform': 'rotate(0deg)', /* IE 9 */
                '-webkit-transform': 'rotate(0deg)', /* Chrome, Safari, Opera */
                'transform': 'rotate(0deg)'
            })
        }
    });
    $('.point').on('mouseenter', function () {
        $(this).children('a').children('.description').fadeIn(200);
    }).on('mouseleave', function () {
        $(this).children('a').children('.description').fadeOut(200);
    });

    $('.point_btn').on('click', function () {
        if (!$('.point_btn').hasClass('active')) {
            $('.point_btn').addClass('active');
            $('.mainimg').slideUp(200);
            $('.turn_next, .turn_prev').hide();
            $('#scroll').slideUp(200);
            $('.shade').slideDown(400);
        }
        else {
            $('.point_btn').removeClass('active');
            $('.mainimg').slideDown(200);
            $('.turn_next, .turn_prev').show();
            $('#scroll').slideDown(200);
            $('.shade').slideUp(400);
        }
    });
    $('.top__li span').on('click', function () {
        if (!$(this).parent('.top__li').hasClass('active')) {
            $(this).parent('.top__li').parent('.top').find('.top__li').removeClass('active').children('ul').slideUp(200);
            $(this).parent('.top__li').addClass('active');
            $(this).parent('.top__li').children('ul').slideDown(400);
        }
        else {
            $(this).parent('.top__li').removeClass('active');
            $(this).parent('.top__li').children('ul').slideUp(400);
        }
    });
});