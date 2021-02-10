console.log('added');

$(".__j-sliderClients").slick({
    // normal options...
    infinite: true,
    slidesToShow: 5,
 
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            dots: false
        }
    }, {
        breakpoint: 480,
         slidesToShow: 1,
    }]
});

$(".j-sliderClients").slick({
 
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
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



if($(window).outherWidth() < 667) {

      $("#s_nums").slick();
}






$(".j-sliderReviews").slick({
    centerPadding: '50px'
});
$("#itemsSlider").slick({
    slidesToShow: 2
});
//plains
var wrapSlider = $(".j-plSlider");
wrapSlider.slick({
    slidesToShow: 3,
    infinite: false,
    arrows: false
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
$(document).ready(function() {
    $('.menu-tab, #j-close').click(function() {
        $('.menu-hide').toggleClass('show');
        $('.menu-tab').toggleClass('active');
    });
    $('a').click(function() {
        $('.menu-hide').removeClass('show');
        $('.menu-tab').removeClass('active');
    });
});






ymaps.ready(function() {
    var myMap = new ymaps.Map('j-map', {
        center: [55.751574, 37.573856],
        zoom: 9,
        // Также доступны наборы 'default' и 'largeMapDefaultSet'
        // Элементы управления в наборах подобраны оптимальным образом
        // для карт маленького, среднего и крупного размеров.
        controls: ['smallMapDefaultSet']
    }, {
        searchControlProvider: 'yandex#search'
    });
});


// $.extend($.lazyLoadXT, {
//   edgeY:  200,
//   srcAttr: 'data-src'
// });

$(window).lazyLoadXT();


//$.fancybox.open('<div class="message"><h2>Hello!</h2><p>You are awesome!</p></div>');