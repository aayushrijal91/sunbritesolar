$("#brands_slider").slick({
    slidesToShow : 4,
    slidesToScroll : 1,
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

$("#testimonial_slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    centerPadding: "120px"
})

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
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