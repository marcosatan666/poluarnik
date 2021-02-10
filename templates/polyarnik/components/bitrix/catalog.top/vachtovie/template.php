<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>
<section id="vacht_top_catalog">
        <div class="container px-0 pb-5">
            <div class="h1 text-center"><b>Цена на </b> <br> вахтовые поселки</div>
            <div class="catalog">
                    
                    <?if (!empty($arResult['ITEMS']))
                    {
                        foreach ($arResult['ITEMS'] as $key => $arItem) { 
                            ?>
                        
                            <div class="good_wrapper col-12 col-sm-6 col-lg-3">
                                    <div class="good">
                                        <p class="title mb-0"><?=$arItem['NAME']?></p>
                                        <hr class="decor">
                                        <div class="img">
                                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" height="150">
                                        </div>    
                                        <div class="card-footer px-5 py-4">
                                            <div class="price mb-3">Стоимость<br> ...
                                                <br>от <span class="price_val"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?> ₽ м2</span>
                                            </div>
                                                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" onclick class="btn btn-orange">Подробнее</a>
                                        </div>

                                    </div>
                            </div>

                        <?}?>
                    <?}?>
            </div>
        </div>
</section>