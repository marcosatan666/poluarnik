<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vagon-ready.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);

$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/get-kp.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<? 
  include("include/filter.php");
  ?>
<?
$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vagon_kp.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>
  
<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vagon_price-cats.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>
    
    
<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/vagon_cost.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/delivery.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<?$APPLICATION->IncludeComponent(
        "bitrix:photo.section", 
        "gallery", 
        array(
            "COMPONENT_TEMPLATE" => "gallery",
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "8",
            "SECTION_ID" => "53",
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



<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/popups.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>
