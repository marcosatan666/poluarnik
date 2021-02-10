var vagonSlider = $("#j-angar_head_slider");
var autoSpeed = 2500;


vagonSlider.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  arrows: false,
  fade: true,
  autoplay: true,
  autoplaySpeed: autoSpeed,
});

$(".slide-title").on('click', function () {

  let i = $(this).index();
  var currentSlide = vagonSlider.slick('slickCurrentSlide');
  console.log(currentSlide);
  console.log(i);

  vagonSlider.slick('slickGoTo', i - 1);

})

vagonSlider.on("beforeChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  $(".slide-title").removeClass("active");
  $(".slide-title:eq(" + currentSlide + ")").addClass("active");
});

var angarItemsSlider = $("#angarItemsSlider");

angarItemsSlider.slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: autoSpeed,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$("#slide_items_angary .arrow-r").on("click", function () {
  angarItemsSlider.slick("slickNext");
});

$("#slide_items_angary .arrow-l").on("click", function () {
  angarItemsSlider.slick("slickPrev");
});

angarItemsSlider.on("beforeChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  $(".j-c_num").text(nextSlide + 1);
});

$("#js-sliderScheme").slick();
