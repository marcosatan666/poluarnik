<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="angary_character">
    <div class="container">
        <div class="h1 text-center"><?=html_entity_decode($arParams['HEAD_TEXT'])?></div>
        <p class="text-center my-4"> <?=html_entity_decode($arParams['HEAD_DESCRIPTION'])?></p>

     
        <div class="card-group comparison">
            <div class="card col-lg d-none d-lg-block">
                <div class="card-body shadow">
                    <div class="card-title">
                        Основные характеристики зданий:
                    </div>
                </div>
                <ul class="list-group list-group-flush px-0 shadow">

                    <? foreach ($arResult['PROPERTY_NAMES'] as $key => $value) {?>
                            <li class="list-group-item">
                               <?=$value?>
                            </li>
                    <?}?>

                </ul>
                <div class="card-footer">&nbsp;</div>
            </div>

            <?foreach ($arResult['ELEMENTS'] as $key => $arElement) {?>
              
                <div class="card col-lg">
                    <div class="card-body">
                        <div class="card-title">
                        <?=$arElement['NAME']?>
                        </div>
                        <hr class="decor">
                        <p>
                            <?=$arElement['PREVIEW_TEXT']?>
                        </p>
                        <img src="<?=$arElement['IMAGE_FILE']['SRC']?>" alt="" class="card-image">
                    </div>
                    <ul class="list-group list-group-flush ">
                        
                        <? foreach ($arResult['PROPERTY_NAMES'] as $propkey => $arProp) {?>
                            
                            <li class="list-group-item">
                             
                                <?=$arResult['ELEMENTS'][$key]['PROPERTYS'][$propkey]['~VALUE'];?>

                            </li>
                               
                        <?}?>

                      

                    </ul>
                    <div class="card-footer">
                        <div class="price py-4">Стоимость<br /> ...
                            <br />от <span class="price_val"><?=$arElement['PRICE']?> ₽ м2</span>
                        </div>
                        <div class="text-center">
                            <input type="button" class="btn mb-3 btn-orange j-show-modal" data-form="formRecall" value="<?=$APPLICATION->GetCurPage(false) == '/angar/' ? 'Рассчитать стоимость': 'Запросить прайс'?>">
                        </div>
                    </div>
                </div>
            
            <?}?>

        </div>
    </div>
</section>