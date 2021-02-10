<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<aside class="col-lg-2">
    <? if ($arResult['SECTIONS']) {?>
    <ul>
        <? foreach ($arResult['SECTIONS'] as $key => $arSection) {?>
        <?  
            $cssClass = '';
            if($key==0){$cssClass = 'active';};
        ?>
        <li><a data-section-id="<?=$arSection['ID']?>" href="#" class="j-filter-section <?=$cssClass?>"><?=$arSection['NAME']?></a></li>
        <?}?>
    </ul>
    <?}?>
</aside>