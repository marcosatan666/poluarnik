<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$Price = 0;
foreach ($arResult['PROPERTIES'] as $key => $value) {
	
	if ($value['CODE'] =='PRICE_FROM' || $value['CODE'] =='PRICE') {
		$Price = $value['VALUE'];
		$arResult['PRICE'] = $value['VALUE'];
		unset($arResult['PROPERTIES'][$key]);
	break;

	}

}

$arGalery = [];

foreach ($arResult['PROPERTIES']['GALERY']['VALUE'] as $key => $value) {

	$arGalery[] = CFile::ResizeImageGet(
		$value,
		array("width" => 500, "height" => 500),
		BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
		true
	);
	
	$arResult['GALERY_LIST_SMALL'][] = CFile::ResizeImageGet(
		$value,
		array("width" => 150, "height" => 150),
		'',
		true
	);

}

$arResult['GALERY_LIST'] = $arGalery;



$arChars =[];
foreach ($arResult['PROPERTIES']['CHARS']['VALUE'] as $key => $value) {
	 
	$arChars[] = array(
		$value,
		$arResult['PROPERTIES']['CHARS']['DESCRIPTION'][$key]
	);
	
}

$arResult['CHARS'] = $arChars;










