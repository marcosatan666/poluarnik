<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?if (!empty($arResult)): ?>
<div class="catalog">
<?$previousLevel = 0;?>
<?foreach ($arResult as $arItem):
    if ($arItem["IS_PARENT"] || $arItem["DEPTH_LEVEL"] == 1) {
        if ($arItem["ITEM_TYPE"] !== 'P') {?>
	            <div class="good_wrapper">
	             	<div class="good">
	                    <p class="title"><?=$arItem['TEXT']?> <span>―</span></p>
	                    <ul>
	                    <? foreach ($arResult as $su8bLink) {?>
                               <?if ($su8bLink['ADDITIONAL_LINKS'][0] == $arItem['LINK']) {?>
	                          	<li><a href="<?=$su8bLink['LINK']?>"><?=$su8bLink['TEXT']?></a></li>
	                          	<?}?>
	                          <?}?>
	                    </ul>
	                    <div class="img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/main_page/img/product1.png" alt=""></div>
	                    <a href="/vagon-doma/" onclick="popup(6, this)" class="btn">Подробнее</a>
	                </div>
	            </div>
	         <?}}?>
<?endforeach?>
</div>
<?endif?>
