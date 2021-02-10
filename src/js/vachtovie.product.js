console.log('inner');
// $('.j-gal').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
 
//   asNavFor: '.j-thumbs'
// });
// $('.j-thumbs').slick({
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   asNavFor: '.j-gal',
//   dots: false,
//   centerMode: false,
//   vertical: true,
//   focusOnSelect: false
// });



var galSlider = $(".j-gal"),
    thumbElementClass = ".j-thumbs>div";

galSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,

    arrows: true,
    fade: false,
    autoplaySpeed: 600,

});

$(thumbElementClass).on('click', function(){
      
      var i = $(this).index();  
      $(thumbElementClass).removeClass('active'); 
      $(this).addClass('active');
      galSlider.slick('slickGoTo', i);

})

galSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
   $(thumbElementClass).removeClass('active'); 
   $(thumbElementClass+":eq("+(nextSlide)+")").addClass('active');

});