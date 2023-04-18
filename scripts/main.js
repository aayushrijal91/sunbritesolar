$("#brands_slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    speed: 2000,
    autoplaySpeed: 0,
    cssEase: 'linear',
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});

$(".offering_slider").slick({
    slidesToShow: 1,
    arrows: false,
    slidesToScroll: 1,
    draggable: false,
    adaptiveHeight: true
});

$('.slideToNext').on('click', function () {
    $(this).parents(".offering_slider").slick('slickGoTo', 1);
});

$('.slideToPrev').on('click', function () {
    $(this).parents('.offering_slider').slick('slickGoTo', 0);
});

$("#testimonial_slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    centerPadding: "120px",
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                centerPadding: "30px"
            }
        }
    ]
})

document.querySelectorAll('a[href="#form"], a[href="#installations"], a[href="#rebates"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(window).scroll(function () {
    var targetOffset = $('#rebates').offset().top;
    var scrollOffset = $(window).scrollTop();

    if (scrollOffset >= targetOffset) {
        console.log('User has scrolled to target section');
        $('.handcash').addClass('animate');
    } else {
        $('.handcash').removeClass('animate');
    }
});