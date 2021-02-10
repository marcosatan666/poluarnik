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
 <div class="serts">
<?foreach($arResult["ROWS"] as $arItems):?>
	           <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
       
	
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
			  <a href="<?=$arItem["PICTURE"]["SRC"]?>" data-fancybox="sert">
                    <img class="lazy" src="<?=SITE_TEMPLATE_PATH?>/assets/main_page/img/logo.png" data-src="<?=$arItem["PICTURE"]["SRC"]?>" alt="" />
                </a>
				
		
			<?endif;?>
		<?endforeach?>

	<?endforeach?>
</div>
 <div class="pagingInfo"><span>3</span>/6</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


