<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<nav class="nav d-flex navMiddle mx-auto pt-4">
		<? foreach($arResult as $arItem):?>
			<a class="n_link" href="<?=$arItem["LINK"]?>"> <?=$arItem["TEXT"]?></a>
		<?endforeach?>	
	</nav>

<?endif?>