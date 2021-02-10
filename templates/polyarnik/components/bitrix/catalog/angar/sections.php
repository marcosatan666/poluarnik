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

?>

<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/superstar.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/angar_full-cycle.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"cost", 
	array(
		"COMPONENT_TEMPLATE" => "cost",
		"HEAD_TITLE" => 'Узнайте цену Ангара',
		"HEAD_DESCRIPTION" => 'и получите индивидуальное Коммерческое предложение',
		"LEFT_IMAGE_SRC" => '/upload/uf/c28/c2805b39e199fd9274adf22017323ca8.png',
		"DOC_IMAGE_SRC" => '/upload/uf/120/120f06d8a2c9eb7690b9fc7692d9be14.png'
	),
	false
);?>



<?$APPLICATION->IncludeComponent(
        "doweb:catalog.elements", 
        "moduli_character", 
        array(
        'IBLOCK_ID' =>11,
        'IBLOCK_SECTION_ID' => '',
        "HEAD_TEXT" => "<b>Cравнительная</b><br> характеристика",
        "SHOW_PROPS" =>'Y',
        "HIDE_PROPS" => array('STATIC_CONTENT_FILE')
		 ),
        false
    );
?>




<?
// $APPLICATION->IncludeFile(
//     SITE_TEMPLATE_PATH . "/include/blocks/angar_chars.php",
//     array(),
//     array(
//         "MODE"     => "php",
//         "NAME"     => "",
//         "TEMPLATE" => "include_area.php",
//     )
// );
?>



<?$APPLICATION->IncludeComponent(
        "doweb:catalog.elements", 
        "slide_items_angary", 
        array(
        'IBLOCK_ID' =>8,
        'IBLOCK_SECTION_ID' => 51,
        "HEAD_TEXT" => "<b>Производим ангары</b><br />Всех назначений",
        "SHOW_PROPS" =>'Y',
        "HIDE_PROPS" => array('STATIC_CONTENT_FILE')
		 ),
        false
    );
?>


<?
// $APPLICATION->IncludeFile(
//     SITE_TEMPLATE_PATH . "/include/blocks/angar_slide-items.php",
//     array(),
//     array(
//         "MODE"     => "php",
//         "NAME"     => "",
//         "TEMPLATE" => "include_area.php",
//     )
// );

?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/angar_3d.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/angar_building.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>




<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/gallery.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>


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










