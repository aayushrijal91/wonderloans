// AOS.init({ duration: 1500 });

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

$(() => {
    $('#cta_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                dots: true,
                autoplay: true,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                dots: true,
                autoplay: true,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                dots: true,
                autoplay: true,
            }
        }
        ]
    });


    // Function to initialize or destroy the slick slider based on screen width
    function initSlickSlider() {
        var screenWidth = $(window).width();

        // Check if screen width is less than or equal to 576px
        if (screenWidth <= 576) {
            $('#control_slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                adaptiveHeight: true,
            });
        }
    }

    // Initialize slick slider on page load
    initSlickSlider();

    // Reinitialize slick slider on screen width change
    $(window).on('resize', function () {
        initSlickSlider();
    });

    $('.loans-slider-wrapper ul li.slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());

    let loanSlider = $('#loans_slider').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
        dots: true
    });

    $('.loan-slider-btn').on('click', function () {
        $(this).parents('li').siblings().removeClass("active");
        $(this).parents('li').addClass('active');

        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());
        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').css('left', 0);
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(2)').width());
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').css('left', $('.loans-slider-wrapper ul li:nth-child(1)').width() + 9);

        loanSlider.slick('slickGoTo', $(this).attr('slideTarget'));
    });

    $('#testimonial_slider').slick({
        slidesToShow: 3,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [

            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

let formSlick = $("#form_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    draggable: false,
    dots: false,
    responsive: [{
        breakpoint: 540,
        settings: {
            slidesToShow: 1,
            draggable: false,
            touchMove: false,
        }
    }]
});

let loanCap = 100000;
let termCap = 7;

$('#borrowSlider').on('input', function () {
    let value = $("#borrowSlider").val();
    let formattedVal = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $('#borrowAmount').html(formattedVal);

    $(this).parents('.range').find('.sliderThumb.amount').css('left', (value * (97 / loanCap)) + "%");
    $(this).parents('.range').find('.progressBar.amount').css('width', (value * (100 / loanCap)) + "%");
});

$('#termSlider').on('input', function () {
    let value = $("#termSlider").val();
    let formattedVal2 = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $('#borrowTerm').html(formattedVal2);

    $(this).parents('.range').find('.sliderThumb.year').css('left', (value * (95 / termCap)) + "%");
    $(this).parents('.range').find('.progressBar.year').css('width', (value * (100 / termCap)) + "%");
});

if ($(window).width() > 1439) {
    $('#seeTestimonials').on('click', function () {
        $('.about_testimonials').css('transform', 'translateX(-100%)');
    });
}

$(".fieldgroupnext").on("click", function (e) {
    e.preventDefault();
    $(".fieldgroup").hide();
    $(".fieldgroup-2").fadeIn();
});

$(".fieldgroupnext-2").on("click", function (e) {
    e.preventDefault();
    $(".fieldgroup").hide();
    $(".fieldgroup-3").fadeIn();
});

var SITE_URL = "https://loanoptions.ai/wonderloans";

const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
});

if (params.partnerId) {
    localStorage.setItem('externalPartnerId', params.partnerId);
} else {
    if (localStorage.getItem("externalPartnerId") === null) {
        localStorage.setItem("externalPartnerId", 1933);
    }
}

$(".loanwidgetsubmit").on('click', function(e) {
    e.preventDefault();
    let borrowAmount = $("#borrowSlider").val();
    let term = $("#termSlider").val();
    let loanUsage = $("#loanUsage").val();

    let sourceval = "LOANOPTIONS";
    let externalPartnerId = localStorage.getItem("externalPartnerId");
    let targetSystem = "SKYNET";

    localStorage.setItem("sourceUrl", SITE_URL);

    localStorage.setItem("source", sourceval);

    localStorage.setItem("targetSystem", targetSystem);

    let quote = {
        type: "PERSONAL_LOAN",
        usage: loanUsage == "Personal" ? "CONSUMER" : "COMMERCIAL_FULL_DOC",
        term: term,
        amount: borrowAmount,
        source: sourceval,
        sourceUrl: SITE_URL,
        targetSystem: targetSystem,
        externalPartnerId: externalPartnerId,
    }

    localStorage.setItem('quote', JSON.stringify(quote));

    // let urlEncrypt = `?data=${encodeURIComponent(JSON.stringify(quote))}&entry_url=${sourceUrl}&quote_id=` // make quote_id empty

    // window.location.href = `https://loanoptions.ai/application${urlEncrypt}`;
    window.location.href = 'https://loanoptions.ai/application';
});