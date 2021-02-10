<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="moduli_plans">
        <div class="container">
            <div class="h1 text-center mb-lg-5 pb-4">
                <?=html_entity_decode($arParams['HEAD_TEXT'])?>
            </div>
            <div class="j-plSlider">

            <?$i=1;?>

            <?foreach ($arResult['ELEMENTS'] as $key => $arElement) {?>
                <?$i++;if($i % 2 ==0) {echo "<div>";}?>
                
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <?=$arElement['NAME']?><br> Из 2-х блоков<br> Размер: 6x5м
                            </div>
                            <div class="j-plain-slider">
                                
                                <?foreach ($arElement['GALERY'] as $propKey => $image_src) {?>
                                    <img src="<?=$image_src?>" alt class="card-image">
                                    <?}?>
                               
                            </div>
                            <div class="card-footer">
                                <div class="price py-4"><span class="price_val">от <?=$arElement['PRICE']?> ₽</span></div>
                                <div class="text-center">
                                    <input type="button" class="btn mb-3 btn-orange" value="Подробнее">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <? if($i % 2 ==1) {echo "</div>";}?>

            <?}?>    

            </div>
            <div class="d-flex justify-content-center">
                <button class="arrow-l" data-for="plSlider" data-to="slickPrev">prev</button>
                <div class="j-numerator my-lg-4 text-center" data-slider="plSlider">
                    <span class="c_orange j-c_num">1</span><i class="px-1">/</i><span class="j-c_count"><?=count($arResult['ELEMENTS'])?></span>
                </div>
                <button class="arrow-r" data-for="plSlider" data-to="slickNext">next</button>
            </div>
        </div>
</section>   