<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="<?=$arParams['CSS_ID']?>">
    <div class="container">
        <div class="h1 text-center mb-5"><?=html_entity_decode($arParams['HEAD_TEXT'])?> </div>

        <?foreach ($arResult['ELEMENTS'] as $key => $arElement) {?>

            <div class="card-group angary_tent_comparison">

                <div class="card col-lg ">
                    <div class="row shadow">
                        <div class="col-12 col-md">
                            <div class="card-body">
                                <div class="card-title">
                                    <?=$arElement['NAME']?>
                                </div>
                                <hr class="decor">
                                <img src="<?=$arElement['IMAGE_FILE']['SRC']?>" alt="" class="card-image">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <ul class="list-group list-group-flush ">

                                <? foreach ($arResult['PROPERTY_NAMES'] as $propNamekey => $value) {?>
                                    <li class="list-group-item">
                                        
                                        <span class="d-none d-lg-inline"><?=$value?></span>
                                            <div class="d-lg-none"><?=$value?></div>
                                        <span class="d-lg-none">
                                                <?=$value?>
                                        </span>
                                    </li>
                                <?}?>

                        
                            </ul>	
                        </div>
                    
                    </div>
                    <div class="d-none d-lg-block col-12 card-text">
                            <?=$arElement['PREVIEW_TEXT'];?>
                    </div>
                </div>
                            
                <div class="card col-lg-4 d-lg-block">

                    <ul class="list-group list-group-flush px-0 d-none d-lg-block">
                         
                         <? foreach ($arResult['PROPERTY_NAMES'] as $propkey => $arProp) {?>
                            
                            <li class="list-group-item">
                             
                                <?=$arResult['ELEMENTS'][$key]['PROPERTYS'][$propkey]['~VALUE'];?>

                            </li>
                               
                        <?}?>

                    </ul>

                    <div class="card-footer">
                        <div class="price py-4">Стоимость<br/> ...
                            <br/>от <span class="price_val"><?=$arElement['PRICE']?> ₽ м2</span>

                        </div>
                        <div class="text-center">
                            <input type="button" class="btn mb-3 btn-orange j-show-modal" data-form="formRecall" value="Запросить прайс">
                        </div>
                    </div>
                </div>

                </div> 

        <?}?>
      
        
    </div> 
</section> 