/**
 * Created by user on 16.07.2015.
 */
$(document).ready(function () {
    $('#slider').rhinoslider({
        autoPlay: true,
        showBullets: 'never',
        controlsPlayPause: false
    });
    $('.first').circleProgress({
        value: 0.95,
        size: 180.0,
        thickness: '11',
        fill: {
            color: '#183c22' //or image: 'http://i.imgur.com/pT0i89v.png'
        },
        startAngle: -Math.PI / 2,
        animation: {
            duration: 1200,
            easing: 'circleProgressEasing'
        }
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('p').text((String(stepValue.toFixed(2)).substr(2)) + '%')
    });

    $('.second').circleProgress({
        value: 0.67,
        size: 120.0,
        thickness: '11',
        fill: {
            color: '#324072' //or image: 'http://i.imgur.com/pT0i89v.png'
        },
        startAngle: -Math.PI / 2,
        animation: {
            duration: 1200,
            easing: 'circleProgressEasing'
        }
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('p').text((String(stepValue.toFixed(2)).substr(2)) + '%')
    });

    $('.third').circleProgress({
        value: 0.28,
        size: 120.0,
        thickness: '11',
        fill: {
            color: '#56a5b5' //or image: 'http://i.imgur.com/pT0i89v.png'
        },
        startAngle: -Math.PI / 2,
        animation: {
            duration: 1200,
            easing: 'circleProgressEasing'
        }
    }).on('circle-animation-progress', function (event, progress, stepValue) {
        $(this).find('p').text((String(stepValue.toFixed(2)).substr(2)) + '%')
    });
    $('.contactus').on('click', function () {
        $(this).fadeOut(1600);
        $('.shadow').fadeIn(1600);
    });
    $('.shadow').on('mouseleave', function() {
        $(this).fadeOut(600);
        $('.contactus').fadeIn(600);
    });


});