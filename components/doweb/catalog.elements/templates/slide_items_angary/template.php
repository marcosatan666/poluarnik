<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="slide_items_angary">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="h1 mb-lg-5 pb-4"><?=html_entity_decode($arParams['HEAD_TEXT'])?></div>
            </div>
            <div class="col-lg">
                <div class="d-none d-lg-flex justify-content-center">
                    <button class="arrow-l" data-for="plSlider" data-to="slickPrev">prev</button>
                    <div class="j-numerator text-center" data-slider="plSlider">
                        <span class="c_orange j-c_num">2</span><i class="px-1">/</i><span class="j-c_count">2</span>
                    </div>
                    <button class="arrow-r" data-for="plSlider" data-to="slickNext">next</button>
                    <?/*
                    <div class="j-slide-desc">
                        <b>Для животных</b>
                        <p>Тут можно будет написать несколько строк
                            об ангарах вцелом или о каждой области применения
                            в отдельности. </p>
                    </div>
                    */?>
                </div>
            </div>
        </div>
        <div id="angarItemsSlider">

            <?foreach ($arResult['ELEMENTS'] as $key => $arElement) {?>
                <div>
                    <div class="h5"><?=$arElement['NAME']?></div>
                    <hr class="decor d-block mx-auto">
                    <img src="<?=$arElement['IMAGE_FILE']['SRC']?>" alt="" class="img-fluid item-pic">
                </div>
            <?}?>


        </div>

        <div class="d-flex justify-content-center align-items-center d-lg-none">
            <button class="arrow-l" data-for="js-sliderScheme" data-to="slickPrev">prev</button>
            <div class="j-numerator my-4 text-center" data-slider="js-sliderScheme">
                <span class="c_orange j-c_num">2</span><i class="px-1">/</i><span class="j-c_count">2</span>
            </div>
            <button class="arrow-r" data-for="js-sliderScheme" data-to="slickNext">next</button>
        </div>
        
    </div>
</section>
