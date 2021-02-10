<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);?>

<div class="head-text mb-5">
    <div class="h1"><?=$arResult['NAME']?></div>
</div>

       
            <div class="row head-card">
                <div class="col-lg-5 order-lg-2 text-center">
                    <div class="j-gal">
                        <?foreach ($arResult['GALERY_LIST'] as $key => $arImage) {?>
                               <img src="<?=$arImage['src']?>" alt class="img-fluid">
                        <?}?>
                    </div>
                </div>
                <div class="col-lg-1 order-lg-1">
                    <div class="j-thumbs">
                    <?foreach ($arResult['GALERY_LIST_SMALL'] as $key => $arImage) {?>
                        <div><img src="<?=$arImage['src']?>" alt></div>
                    <?}?>        

                    </div>
                </div>
                <div class="col-lg-6 order-lg-3">
                    <div class="h6 mb-4">Описание:</div>
                    <div class="desc mb-4">
                        <?=$arResult['PREVIEW_TEXT']?>
                    </div>
                    <div class="prop-wrap bg-white shadow py-3 mb-5">
                        <div class="row px-5 py-3 mx-0">
                            <div class="col-6">
                                Размеры здания:
                            </div>
                            <div class="col-6">
                                <b>Ширина - <?=$arResult['PROPERTIES']['SHIRINA']['VALUE']?> мм</b><br>
                                <b>Длина - <?=$arResult['PROPERTIES']['VISOTA']['VALUE']?> мм</b>
                            </div>
                        </div>
                        <div class="row px-5 py-3 mx-0">
                            <div class="col-6">
                                Количество и размер блоков:
                            </div>
                            <div class="col-6">
                                <b><?=$arResult['PROPERTIES']['RAZMER_AND_BLOX']['VALUE']?></b>
                            </div>
                        </div>
                        <div class="row px-5 py-3 mx-0">
                            <div class="col-6">
                                Сертифицирован:
                            </div>
                            <div class="col-6">
                                <b><?=$arResult['PROPERTIES']['SERT']['VALUE']?></b>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="price py-4">Цена: от <span class="price_val"> <?=$arResult['PRICE']?> ₽</span></div>
                        </div>
                        <div class="col-6">
                            <button class="btn mb-3 col-12 btn-orange j-show-modal" data-form="formRecall">Узнать точную стоимость</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chars  shadow">
                <div class="chars-header">Характеристики
                    <hr class="decor d-block">
                </div>
                
                <?foreach ($arResult['CHARS'] as $key => $value) {?>
                        
                <div class="row px-5 py-3 mx-0">
                    
                    <div class="col-lg-2">
                    <?=$value[1]?>:
                    </div>
                    <div class="col-lg-9">
                        <p>
                        <?=$value[0]?></p>
                    </div>
                </div>

                <?}?>
            </div>