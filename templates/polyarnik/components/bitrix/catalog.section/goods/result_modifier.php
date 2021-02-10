<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Diag\Debug;
/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$arFilterBlocks = array('people', 'width');

$component = $this->getComponent();
$arParams  = $component->applyTemplateModifications();

$startPage = $arParams['START_PAGE'];
$onPageCount = $arParams['ON_PAGE_COUNT'];

$countItems  = count($arResult['ITEMS']);


///////



// foreach ($arResult['ITEMS'] as $key => $value) {
//     Debug::writeToFile($value['NAME']);
// }



//
$countPages = ceil($countItems / $onPageCount);

$arResult['COUNT_PAGES']  = $countPages;
$arResult['CURRENT_PAGE'] = $startPage;

/////////////////////////

$arPages = array_fill(1, $countPages, '');
$arResult['NEXT_PAGE'] = 1;
$arResult['PREV_PAGE'] = 1;

$intPrevPage = $startPage-1;
if (isset($arPages[$intPrevPage]) && $intPrevPage >0) {
    
    $arResult['PREV_PAGE'] = $intPrevPage;

}


$intNextPage = $startPage+1;
if (isset($arPages[$intNextPage])) {
    
    $arResult['NEXT_PAGE'] = $intNextPage;

}


$maxNumber = $onPageCount*$startPage;
$minNumber = $maxNumber-$onPageCount+1;

$i = 0;

foreach ($arResult['ITEMS'] as $key => $item) {

    $i++;
    if($i > $maxNumber || $i<$minNumber){
        
        unset($arResult['ITEMS'][$key]);

    }

}


$rsProperty = \Bitrix\Iblock\PropertyTable::getList(array(

        'filter' => array(
        'IBLOCK_ID'=> $arParams['IBLOCK_ID'],
        '=FILTRABLE' => 'Y',
        'ACTIVE'=>'Y'),

));



while($arProperty=$rsProperty->fetch())
{   
    foreach ($arFilterBlocks as $key => $value) {
        $propCode = $arProperty['CODE'];
        $propID = $arProperty['ID'];
      
        $str=strpos($propCode , "_");
        $row=substr($propCode , 0, $str);
        
        $isChecked = '';
        if(in_array($propID, $arParams['FILTER_CHECKED'])){ $isChecked='checked';}

        if ($row ==$value) {
            $arProperty['checked'] = $isChecked;
            $arResult['FILTER_PROPS'][$value][$propID] = $arProperty;

        }

    }
}
// echo "<pre>";
// print_r($arResult);
// echo "</pre>";
