<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$cssClassAttr = 'class="'.$arParams['CSS_CLASS'].'"';
$prefSlider = $arParams['PREF_SLIDER'];

?>

<section id="slide_items" <?=$cssClassAttr?>>
    <div class="container">
        <div class="h1"><b class="d-block"><?=html_entity_decode($arParams['HEAD_TITLE'])?></div>
        <div class="j-numerator my-4 text-right" data-slider="<?=$prefSlider?>">
        
        <span class="c_orange j-c_num">1</span><i class="px-1">/</i><span class="j-c_count"><?=$arResult['COUNT']?></span></div>

        <div id="<?=$prefSlider?>">

            <?foreach ($arResult['ITEMS'] as $key => $value) {?>
                <div>
                    <b class="h5"><?=$value['NAME']?></b>
                    <img src="<?=$value['IMAGE_FILE']['SRC']?>" alt="<?=$value['NAME']?>" class="item-pic">      
                </div>   
            <?}?>
            
        </div>
    </div>
</section>



