document.addEventListener("DOMContentLoaded", function() {
    if ($(window).outerWidth() < 812) {
        $("#moduli_advantages .fade-box").each(function(i, e) {
            var eHtml = $(e);
            $("#mobAdvSlider").append(eHtml);
        })
        numSlider('mobAdvSlider');
    }
})

//plains
var wrapSlider = $(".j-plSlider");
wrapSlider.slick({
    slidesToShow: 3,
    infinite: false,
    arrows: false,
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$("button[data-for=plSlider]").on('click', function() {
    wrapSlider.slick($(this).attr('data-to'));
})
wrapSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $(".j-c_num").text(nextSlide + 1);
});
$(".j-plain-slider").slick({
    slidesToShow: 1
});