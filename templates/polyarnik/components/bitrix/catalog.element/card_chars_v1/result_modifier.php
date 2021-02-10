<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$Price = 0;

foreach ($arResult['PROPERTIES'] as $key => $value) {
	
	if ($value['CODE'] =='PRICE_FROM') {
		$Price = $value['VALUE'];
		$arResult['PRICE'] = $value['VALUE'];
		unset($arResult['PROPERTIES'][$key]);
	break;

	}

}
