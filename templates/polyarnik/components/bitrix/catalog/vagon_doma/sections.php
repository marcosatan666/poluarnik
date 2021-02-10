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
// $dir = $APPLICATION->GetCurDir();
$APPLICATION->AddChainItem("Вагон дома", "/".$APPLICATION->GetCurDir()."/");

?>

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


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"delivery", 
	array(
		"COMPONENT_TEMPLATE" => "delivery",
		"HEAD_TITLE" => ' <b>Доставим в срок</b>
        <span class="c_orange"> Железнодорожным<br>
            и автомобильным транспортом</span><br>
        по иркутской области и РФ',
		"HEAD_DESCRIPTION" => 'Узнайте, как сэкономить<br />на доставке <b class="c_orange"><em>до 300%</em></b>',
		"CENTER_IMAGE_SRC" => '/local/dist/images/png/cars.png'
	),
	false
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

<script>
    
var vagonSlider = $("#j-vagon_head_slider");

vagonSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    fade: true,
    autoplaySpeed: 600,

});

$(".slide-title").on('click', function () {
    $('.slide-title').removeClass("active");
    let i =$(this).attr('data-slide');
    $(this).addClass("active");

    vagonSlider.slick('slickGoTo', i);
    
})

</script>