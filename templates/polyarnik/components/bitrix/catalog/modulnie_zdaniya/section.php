<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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

// echo "<pre>";
// print_r($arResult);
// echo "</pre>";

$isSection = false;
$contentPagePath = '';
$pathHeadPart = '';

$rsSections = CIBlockSection::GetList(
    array(),
    array('IBLOCK_ID' => 13, '=CODE' => $arResult['VARIABLES']['CODE'], 'GLOBAL_ACTIVE' => 'Y'),
    false,
    Array('UF_*','SECTION_CODE')
);
if ($arSection = $rsSections->Fetch())
{
    $isSection = true;
    ?>
 

    <?$APPLICATION->IncludeComponent(
        "doweb:page.sections", 
        "site-header", 
        array(
            'ARRAY_SECTION' =>$arSection
        ),
        false
    );?>
    

    <?$STATIC_CONTENT = $arSection['UF_STATIC_CONTENT_PATH']; 
  
        
        if(strlen($STATIC_CONTENT) > 0){
            $pathHeadPart = $arSection['UF_STATIC_HEAD_PART']; 
            $contentPagePath = $STATIC_CONTENT;

        }

    ?>

<?}?>


<? if($isSection == true){?>
 
<? if(strlen($STATIC_CONTENT) > 0){

        $APPLICATION->IncludeFile(
            $pathHeadPart,
                array(),
                array(
                "MODE"     => "php",
                "NAME"     => "",
                "TEMPLATE" => "include_area.php",
            )
        );
        
        $APPLICATION->IncludeFile(
            $contentPagePath,
            array(),
            array(
                "MODE"     => "php",
                "NAME"     => "",
                "TEMPLATE" => "include_area.php",
            )
        );

} else {?>



        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/include/blocks/superstar.php",
            array(),
            array(
                "MODE"     => "php",
                "NAME"     => "",
                "TEMPLATE" => "include_area.php",
            )
        );?>

<?$APPLICATION->AddChainItem("Модульные здания", "/modulnie-zdaniya/");?>
<?$APPLICATION->AddChainItem($arSection['NAME'], "");?>

<!-- moduli only -->
<?$APPLICATION->IncludeComponent(
        "doweb:page.sections", 
        "moduli_advantages", 
        array(
        'IBLOCK_ID' =>17,
        'INFO_LIST_ID' => 42,
		"HEAD_DESCRIPTION" => '<b>поставляются в максимальной<br/>заводской готовности</b><br/>согласно проектной документации<br/>и пожеланиям Заказчика',
		"CENTER_IMAGE_SRC" => '/local/dist/images/png/moduli/moduli_pro.png'
        ),
        false
    );
?>


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"moduli_kp", 
	array(
		"COMPONENT_TEMPLATE" => "moduli_kp",
		"HEAD_TITLE" => 'Получите расчет',
        "HEAD_DESCRIPTION" =>'КОММЕРЧЕСКОГО ПРЕДЛОЖЕНИЯ',
        "SMALL_DESCRIPTION" => 'Для получения коммерческого <br> предложения на почту заполните <br> форму',
        "DOC_IMAGE_SRC" => '/local/dist/images/png/moduli/kp_moduli.png',
        "FORM_ID" =>'moduli_kp'
	),
	false
);?>





<?
// $APPLICATION->IncludeComponent(
// 	"doweb:page.sections", 
// 	"full-cycle", 
// 	array(
//         "IBLOCK_ID" =>17,
//         'INFO_LIST_ID' => 43,
// 		"COMPONENT_TEMPLATE" => "moduli_kp",
// 		"HEAD_TITLE" => '<strong>Полный цикл строительства</strong><br>от производителя',
// 	),
// 	false
// );

?>

<?$APPLICATION->IncludeComponent(
        "doweb:catalog.elements", 
        "moduli_character", 
        array(
        'IBLOCK_ID' =>13,
        'IBLOCK_SECTION_ID' => 50,
        "HEAD_TEXT" => "<b>сравнительная</b> характеристика",
		"HEAD_DESCRIPTION" => 'Компания «Полярник» производит модульные здания двух типов.<br /> С помощью таблицы ниже Вы сможете сравнить характеристики и выбрать подходящее предложение:',
        ),
        false
    );
?>


<?$APPLICATION->IncludeComponent(
        "doweb:catalog.elements", 
        "vacht_plans", 
        array(
            'IBLOCK_ID' =>13,
            'IBLOCK_SECTION_ID' => 49,
            "HEAD_TEXT" => " <b>Типовые планировки</b><br> Модульных зданий",
            "SHOW_PROPS" =>'Y'
		 ),
        false
    );
?>

<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"cost_moduli", 
	array(
		"COMPONENT_TEMPLATE" => "cost_moduli",
		"HEAD_TITLE" => 'модульного здания',
		"HEAD_DESCRIPTION" => 'Получите планировку нужного вам',
		"LEFT_IMAGE_SRC" => '/local/dist/images/png/moduli/kp_modul.png',
		"DOC_IMAGE_SRC" => '/local/dist/images/png/moduli/kp_page.png'
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"delivery", 
	array(
		"COMPONENT_TEMPLATE" => "delivery",
		"HEAD_TITLE" => '<b>Заказать модульное здание</b><br /> с доставкой по иркутской области и рф',
		"HEAD_DESCRIPTION" => 'Узнайте, как сэкономить<br />на доставке <b class="c_orange"><em>до 300%</em></b>',
		"CENTER_IMAGE_SRC" => '/local/dist/images/png/cars.png'
	),
	false
);?>

<!--./moduli only -->


<?$APPLICATION->IncludeComponent(
        "bitrix:photo.section", 
        "gallery", 
        array(
            "COMPONENT_TEMPLATE" => "gallery",
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "8",
            "SECTION_ID" => "52",
            "SECTION_CODE" => "",
            "SECTION_USER_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "ELEMENT_SORT_FIELD" => "sort",
            "ELEMENT_SORT_ORDER" => "asc",
            "FILTER_NAME" => "arrFilter",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PAGE_ELEMENT_COUNT" => "20",
            "LINE_ELEMENT_COUNT" => "4",
            "SECTION_URL" => "",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "META_KEYWORDS" => "-",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "SET_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Фотографии",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        ),
        $component
    );

?>




<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/about.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/our-clients.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/reviews.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/excursions.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<?}?>


<?} else {?>

   
  <? $APPLICATION->addHeadString('<link href="'.DIST_PATH.'css/vachtovie.product.page.css"  type="text/css" rel="stylesheet" />',true);
    $APPLICATION->AddHeadScript(DIST_PATH.'js/vachtovie.product.js');
    $APPLICATION->AddChainItem($APPLICATION->GetPageProperty("h1"), $arParams['SEF_FOLDER']);
    ?>

    
<div class="site-header py-4">
        <div class="container">
        <?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/include/menu.php",
                        array(),
                        array(
                        "MODE"     => "php",
                        "NAME"     => "",
                        "TEMPLATE" => "include_area.php")
                    );?>
       
       <?//TODO - crumbs?>
    
       <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
            "START_FROM" => "0", 
            "PATH" => "", 
            "SITE_ID" => "s2" 
        )
       );


        $APPLICATION->IncludeComponent(
                "bitrix:catalog.element", 
                "vacht_element", 
                array(
                    "COMPONENT_TEMPLATE" => "vacht_element",
                    "IBLOCK_TYPE" => "catalog",
                    "IBLOCK_ID" =>$arParams['IBLOCK_ID'],
                    "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
                    "ELEMENT_CODE" => $arResult['VARIABLES']['CODE'],
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_CODE" => $arResult['VARIABLES']['CODE'],
                    "SHOW_DEACTIVATED" => "N",
                    "OFFERS_LIMIT" => "0",
                    "BACKGROUND_IMAGE" => "-",
                    "SECTION_URL" => "",
                    "DETAIL_URL" => "",
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    "CHECK_SECTION_ID_VARIABLE" => "N",
                    "SEF_MODE" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_NOTES" => "",
                    "CACHE_GROUPS" => "Y",
                    "SET_TITLE" => "Y",
                    "SET_CANONICAL_URL" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "SET_META_KEYWORDS" => "Y",
                    "META_KEYWORDS" => "-",
                    "SET_META_DESCRIPTION" => "Y",
                    "META_DESCRIPTION" => "-",
                    "SET_LAST_MODIFIED" => "N",
                    "USE_MAIN_ELEMENT_SECTION" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ADD_ELEMENT_CHAIN" => "Y",
                    "ACTION_VARIABLE" => "action",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "DISPLAY_COMPARE" => "N",
                    "PRICE_CODE" => array(
                    ),
                    "USE_PRICE_COUNT" => "N",
                    "SHOW_PRICE_COUNT" => "1",
                    "PRICE_VAT_INCLUDE" => "Y",
                    "PRICE_VAT_SHOW_VALUE" => "N",
                    "BASKET_URL" => "/personal/basket.php",
                    "USE_PRODUCT_QUANTITY" => "N",
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "ADD_PROPERTIES_TO_BASKET" => "Y",
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    "PARTIAL_PRODUCT_PROPERTIES" => "N",
                    "LINK_IBLOCK_TYPE" => "",
                    "LINK_IBLOCK_ID" => "",
                    "LINK_PROPERTY_SID" => "",
                    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "COMPATIBLE_MODE" => "Y",
                    "USE_ELEMENT_COUNTER" => "Y",
                    "DISABLE_INIT_JS_IN_COMPONENT" => "N"
                ),
                false
            );
            ?>

           
           
        </div>
</div>
    
    
<?}?>

