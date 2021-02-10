<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

$slCount = count($arResult['ELEMENTS']);
$pageCount = round($slCount/6);

?>

<section id="vacht_plans">
        <div class="container">
            <div class="h1 text-center mb-lg-5 pb-4">
                <?=html_entity_decode($arParams['HEAD_TEXT'])?>
            </div>
            <div class="_j-plSlider">

                <?$i=1;?>

                <?foreach ($arResult['ELEMENTS'] as $key => $arElement) {?>
                    
                    <?$i++;if($i % 2 ==0) {echo "<div>";}?>
                    
                        <div class="card" id="<?=$arElement['ID']?>">
                            <div class="card-body">
                                <div class="card-title">
                                    <?=$arElement['NAME']?><br> Из 2-х блоков<br> Размер: 6x5м
                                </div>
                                <div class="j-plain-slider">
                                    
                                    <?foreach ($arElement['GALERY'] as $propKey => $image_src) {?>
                                    
                                        <img src="<?=$image_src?>" alt="" class="card-image"/>
                                    
                                    <?}?>
                                
                                </div>
                                <div class="card-footer">
                                    <div class="price py-4"><span class="price_val">от <?=$arElement['PRICE']?> ₽</span></div>
                                    <div class="text-center">
                                        <a href="<?=$arElement['DETAIL_PAGE_URL']?>" type="button" class="btn mb-3 btn-orange">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <? if($i % 2 ==1) {echo "</div>";}?>

                <?}?>    

            </div>
           
        </div>
        
        <div class="d-flex justify-content-center">
            <button class="arrow-l" data-for="_j-plSlider" data-to="slickPrev">prev</button>
                <div class="j-numerator my-0 text-center" data-slider="_j-plSlider">
                    <span class="c_orange j-c_num">1</span><i class="px-1">/</i><span class="j-c_count"><?=$pageCount?></span>
                </div>
            <button class="arrow-r" data-for="_j-plSlider" data-to="slickNext">next</button>
        </div>

</section>   

<script>

//plains
var wrapSlider = $("._j-plSlider");
wrapSlider.slick({
    slidesToShow: 3,
    infinite: false,
    arrows: false,
    slidesToScroll: 3,
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




$("._j-plSlider").on('init', function(event, slick){
    console.log("initialized")
});

$("button[data-for=_j-plSlider]").on('click', function() {
    wrapSlider.slick($(this).attr('data-to'));
})
wrapSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

    if(nextSlide > 1) {
        $(".j-c_num").text(nextSlide-1);
    } else {

        $(".j-c_num").text(nextSlide+1);
    }


});

</script>