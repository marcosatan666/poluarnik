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

if($arParams['FLAT_MODE'] && $arParams['FLAT_MODE'] =='Y'){

$APPLICATION->addHeadString('<link href="'.DIST_PATH.'css/vachtovie.product.page.css"  type="text/css" rel="stylesheet" />',true);
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
        );?>

            <?$APPLICATION->IncludeComponent(
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
                    "ADD_SECTIONS_CHAIN" => "Y",
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

            }?>
           
        </div>
</div>
<?//TODO - СТЕНЫ ИЗГОТАВЛИВАЮТСЯ?>
<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vacht_comparision.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vacht_cost.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

