console.log('angar');

var vagonSlider = $("#j-angar_head_slider");

vagonSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    fade: true,
    autoplaySpeed: 600,

});

$(".slide-title").on('click', function () {
    
    let i =$(this).index();
    var currentSlide =vagonSlider.slick('slickCurrentSlide');
    console.log(currentSlide);
    console.log(i);

    vagonSlider.slick('slickGoTo', i-1);
    
})


vagonSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

    $('.slide-title').removeClass("active");
    $('.slide-title:eq(' + currentSlide + ')').addClass("active");



});


var angarItemsSlider = $("#angarItemsSlider");

angarItemsSlider.slick({
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                dots: false,
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


$("#slide_items_angary .arrow-r").on('click', function() {
    angarItemsSlider.slick('slickNext');

    console.log('slickNext');
})


$("#slide_items_angary .arrow-l").on('click', function() {
    angarItemsSlider.slick('slickPrev');
})


angarItemsSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $(".j-c_num").text(nextSlide + 1);
});

// $("#js-sliderScheme").slick();




sliderFunc();

function sliderFunc() {
    let doubleSlider = $("#doubleSlider");

    doubleSlider.slick({
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },],
    });


    doubleSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $("[data-slider=doubleSlider] .j-c_num").text(nextSlide + 1);
    });
}
