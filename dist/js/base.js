var md = new MobileDetect(window.navigator.userAgent);

var autoSpeed = 2000;
// console.log(md.mobile()); // 'Sony'
// console.log(md.phone()); // 'Sony'
// console.log(md.tablet());

$(".j-sliderClients").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: autoSpeed,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

function numSlider(id) {
  var wrapNums = $("#" + id);
  wrapNums.slick({
    slidesToShow: 1,
    infinite: false,
    arrows: false,
  });

  var countSlides = wrapNums.slick("getSlick").slideCount;
  $("[data-slider=" + id + "]")
    .find(".j-c_count")
    .text(countSlides);
  $("button[data-for=" + id + "]").on("click", function () {
    wrapNums.slick($(this).attr("data-to"));
  });
  wrapNums.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    $("[data-slider=" + id + "]")
      .find(".j-c_num")
      .text(nextSlide + 1);
  });
}

if (md.phone()) {
  numSlider("s_nums");
  numSlider("js-sliderScheme");
}

var reviewsSlider = $(".j-sliderReviews");

reviewsSlider.slick({
  centerPadding: "50px",
});

reviewsSlider.on("beforeChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  console.log('currentSlide: ' + currentSlide);
  console.log('nextSlide: ' + nextSlide);
  $('#reviews .j-fancy').addClass('d-none');
  $('#reviews .j-fancy:eq(' + nextSlide + ')').removeClass('d-none');

  // $("#reviews .j-fancy").fadeOut(100);
  // $("#reviews .j-fancy").fadeIn(100);
});

var itemsSlider = $("#itemsSlider");

itemsSlider.slick({
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: false,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

itemsSlider.on("beforeChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  console.log(nextSlide + 1);

  itemsSlider
    .prev()
    .find(".j-c_num")
    .text(nextSlide + 1);
  // $(".j-c_num").text(nextSlide + 1);
});

$(document).ready(function () {
  $(".menu-tab, #j-close").click(function () {
    $(".menu-hide").toggleClass("show");
    $(".menu-tab").toggleClass("active");
  });
  $("a").click(function () {
    $(".menu-hide").removeClass("show");
    $(".menu-tab").removeClass("active");
  });
});
ymaps.ready(function () {
  var plrnkMap = new ymaps.Map(
    "j-map",
    {
      center: [52.27436998319612, 104.22103488957977],
      zoom: 17,

      controls: ["smallMapDefaultSet"],
    },
    {
      searchControlProvider: "yandex#search",
    }
  );

  plrnkMap.behaviors.disable("scrollZoom");

  plrnkMap.geoObjects.add(
    new ymaps.Placemark(
      [52.27414292656704, 104.21708667790985],
      {
        balloonContent: "",
      },
      {
        iconLayout: "default#image",

        iconImageSize: [100, 120],
        iconImageOffset: [-30, -100],
        iconImageHref: "/local/dist/images/marker.png",
      }
    )
  );

  // var geometry = [
  //         [56.308475, 43.982986],
  //         [56.30795, 43.987793],
  //         [56.310073, 43.998007],
  //         [56.314963, 44.012555]
  //     ],

  //     properties = {
  //         hintContent: "Ломаная линия"
  //     },
  //     options = {
  //         draggable: true,
  //         strokeColor: '#ff0000',
  //         strokeWidth: 5

  //     },
  //     polyline = new ymaps.Polyline(geometry, properties, options);

  // myMap.geoObjects.add(polyline);
});

$(window).lazyLoadXT();

function scrollToElement(scroll_el) {
  if ($(scroll_el).length != 0) {
    $("html, body").animate(
      {
        scrollTop: $(scroll_el).offset().top - 105,
      },
      2000
    );
  }
}

function modifySlideTo(e) {
  var scroll_el = $(e).attr("href"),
    DestBox = $(e).data("dest");
  if (window.location.pathname == "/") {
    scrollToElement(scroll_el);
  } else {
    window.location = "/" + scroll_el;
  }
  return false;
}
var SlideEls = document.getElementsByClassName("slide_to");
Array.prototype.forEach.call(SlideEls, function (element) {
  element.addEventListener(
    "click",
    function (e) {
      e.preventDefault();
      modifySlideTo(element);
    },
    false
  );
});

$(".j-fancy ").fancybox();

var buttonUp = $("#buttonUp");

$(window).scroll(function () {
  if ($(this).scrollTop() >= 50) {
    buttonUp.fadeIn();
    buttonUp.attr("style", "display:block");
  }
  if ($(this).scrollTop() < 50) {
    buttonUp.fadeOut();
    buttonUp.attr("style", "display:none");
  }
});

buttonUp.click(function () {
  $("body,html").animate(
    {
      scrollTop: 0,
    },
    500
  );
  return false;
});

// Выбе­рем кнопку и форму
// const $button = document.getElementById('scrollMore');
// const $gallery = document.getElementById('scrollView');
// ​
// // При клике на кнопку
// $button.addEventListener('click', e => {
//   console.log('click');
//   // Про­кру­тим стра­ницу к форме
//   $gallery.scrollIntoView({
//     block: 'nearest', // к бли­жай­шей гра­нице экрана
//     behavior: 'smooth', // и плавно
//   });
// });

// var hiddenElement = document.getElementById("hideWrap");
// var btn = document.getElementById('scrollMore');

// function handleButtonClick() {
//    hiddenElement.scrollIntoView({block: "center", behavior: "smooth"});
//    btn.classList.remove("d-block");
//    btn.classList.add("d-none");
//    btnShow.classList.add("d-block");

// }

// btn.addEventListener('click', handleButtonClick);

// var visibElement = document.getElementById("visiblWrap");
// var btnShow = document.getElementById('scrollTop');

// function handleButtonShow() {
//   visibElement.scrollIntoView({block: "center", behavior: "smooth"});
//   btnShow.classList.remove("d-block");
//   btn.classList.add("d-block");
//   btnShow.classList.add("d-none");

// }

// btnShow.addEventListener('click', handleButtonShow);
