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

$IBLOCK_ID = 11;
$CURRENT_SECTION_ID = 0;



$rsSections = CIBlockSection::GetList(
    array(),
    array('IBLOCK_ID' => $IBLOCK_ID, '=CODE' => $arResult['VARIABLES']['CODE'], 'GLOBAL_ACTIVE' => 'Y'),
    false,
    Array('UF_*','SECTION_CODE')
);
if ($arSection = $rsSections->Fetch())
{
    $CURRENT_SECTION_ID = $arSection['ID'];

    $CURRENT_ELEMENT_ID = $arSection['UF_TOP_ELEMENT_ID'];

    $COST_HEAD_TITLE  = $arSection['UF_COST_HEAD_TITLE'];
    $COST_HEAD_DESCRIPTION  =  $arSection['UF_COST_HEAD_DESCRIPTION'];

    $arFormFile = CFile::GetFileArray($arSection['UF_COST_LEFT_IMAGE_SRC']);
    $COST_LEFT_IMAGE_SRC = $arFormFile['SRC'];

    $arFormDocFile = CFile::GetFileArray($arSection['UF_COST_DOC_IMAGE_SRC']);
    $COST_DOC_IMAGE_SRC = $arFormDocFile['SRC'];
    
    $CHARS_HEAD_TITLE = $arSection['UF_CHARS_HEAD'];

    $HEAD_IMAGE = CFile::GetFileArray($arSection['DETAIL_PICTURE']);
    $HEAD_BG_IMAGE = CFile::GetFileArray($arSection['PICTURE']);



    $APPLICATION->AddChainItem("Ангары", "/angar/");
    $APPLICATION->AddChainItem($arSection['NAME'], "");
   

    //TODO::Параметры секции 
    // $COST_HEAD_TITLE  = "Узнайте цену Ангара";
    // $COST_HEAD_DESCRIPTION  = "и получите индивидуальное Коммерческое предложение";
    // $COST_LEFT_IMAGE_SRC = "/local/dist/images/png/angar/anagr_cost.png";
    // $COST_DOC_IMAGE_SRC = "/local/dist/images/png/angar/kp_angar.png";
            
    // echo "<pre>";
    // print_r($arSection);
    // echo "</pre>";
    
    ?>
    <div class="site-header angar-header py-4" style="background-image: url('<?=$HEAD_BG_IMAGE['SRC']?>');">


        <div class="container">
                <?$APPLICATION->IncludeFile(
                    SITE_TEMPLATE_PATH . "/include/menu.php",
                    array(),
                    array(
                        "MODE"     => "php",
                        "NAME"     => "",
                        "TEMPLATE" => "include_area.php",
                    )
                );?>
                 <div class="head-image" style="background-image: url('<?=$HEAD_IMAGE['SRC']?>');"></div>
                <div class="head-text mt-3" >
                    <div class="row">
                        
               
                        <div class="col-12">
                                <p class="bold">
                                    <?=$arSection['UF_PREH1']?>
                                </p>
                                <div class="h1">
                                    <?=$arSection['UF_H1']?>
                                </div>
                                <p class="bold">
                                    <?=$arSection['UF_SHINE']?>
                                </p>
                                <span class="shine"> </span>
                        </div>
                        <div class="col-md-4 order-2 order-lg-1">

                                <?$APPLICATION->IncludeComponent(
                                                "doweb:simple.forms",
                                                "",
                                                array(
                                                    "FORM_IBLOCK_ID" =>"",
                                                    "FORM_ID" =>"head-text",
                                                    "TITLE" =>  "Узнайте стоимость вагон-дома за 5 минут по телефону",
                                                    "DESC" =>   "",
                                                    "SUBMIT_NAME" => "Узнать стоимость",
                                                    "TYPE" =>'INLINE_VERTICAL',
                                                    "FIELDS" => array(
                                                        "tel"
                                                    )
                                                ),
                                                false
                                    );?>

                        </div>
                        
                     

                    </div>
                </div>


        </div>
    </div>

    <?}?>



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
		"HEAD_TITLE" => $COST_HEAD_TITLE,
		"HEAD_DESCRIPTION" => $COST_HEAD_DESCRIPTION,
		"LEFT_IMAGE_SRC" => $COST_LEFT_IMAGE_SRC,
		"DOC_IMAGE_SRC" => $COST_DOC_IMAGE_SRC
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
        "doweb:catalog.elements", 
        "moduli_character_v2", 
        array(
            'IBLOCK_ID' =>$IBLOCK_ID,
            'IBLOCK_SECTION_ID' => $CURRENT_SECTION_ID,
            "HEAD_TEXT" => "<b>Основные характеристики</b><br> ангаров из сэндвич панелей",
            "SHOW_PROPS" =>'Y',
            "HIDE_PROPS" => array('STATIC_CONTENT_FILE'),
            "CSS_ID" => 'angary_tent_character',
            "ELEMENT_ID" => $CURRENT_ELEMENT_ID
		 ),
        false
    );
?>



<?

// $APPLICATION->IncludeComponent(
//     "bitrix:catalog.element", 
//     "card_chars_v1", Array(
// 	"COMPONENT_TEMPLATE" => "card_chars_v1",
// 		"IBLOCK_TYPE" => "news",	// Тип инфоблока
// 		"IBLOCK_ID" => $IBLOCK_ID,	// Инфоблок
// 		"ELEMENT_ID" => $CURRENT_ELEMENT_ID,	// ID элемента
// 		"ELEMENT_CODE" => "",	// Код элемента
// 		"SECTION_ID" => $CURRENT_SECTION_ID ,	// ID раздела
// 		"SECTION_CODE" => "",	// Код раздела
// 		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
// 		"OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
// 		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
// 		"TEMPLATE_THEME" => "blue",	// Цветовая тема
// 		"PRODUCT_INFO_BLOCK_ORDER" => "sku,props",	// Порядок отображения блоков информации о товаре
// 		"PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",	// Порядок отображения блоков покупки товара
// 		"DISPLAY_NAME" => "Y",	// Выводить название элемента
// 		"IMAGE_RESOLUTION" => "16by9",	// Соотношение сторон изображения товара
// 		"SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
// 		"DETAIL_PICTURE_MODE" => array(	// Режим показа детальной картинки
// 			0 => "POPUP",
// 			1 => "MAGNIFIER",
// 		),
// 		"ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
// 		"DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса
// 		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
// 		"USE_VOTE_RATING" => "N",	// Включить рейтинг товара
// 		"USE_COMMENTS" => "N",	// Включить отзывы о товаре
// 		"BRAND_USE" => "N",	// Использовать компонент "Бренды"
// 		"MESS_PRICE_RANGES_TITLE" => "Цены",	// Название блока c расширенными ценами
// 		"MESS_DESCRIPTION_TAB" => "Описание",	// Текст вкладки "Описание"
// 		"MESS_PROPERTIES_TAB" => "Характеристики",	// Текст вкладки "Характеристики"
// 		"MESS_COMMENTS_TAB" => "Комментарии",	// Текст вкладки "Комментарии"
// 		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
// 		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
// 		"CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
// 		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
// 		"CACHE_TYPE" => "A",	// Тип кеширования
// 		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
// 		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
// 		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
// 		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
// 		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
// 		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
// 		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
// 		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
// 		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
// 		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
// 		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
// 		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
// 		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
// 		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
// 		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
// 		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
// 		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
// 		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
// 		"PRICE_CODE" => "",	// Тип цены
// 		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
// 		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
// 		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
// 		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
// 		"USE_RATIO_IN_RANGES" => "Y",	// Учитывать коэффициенты для диапазонов цен
// 		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
// 		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
// 		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
// 		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
// 		"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
// 		"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
// 		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
// 		"USE_ENHANCED_ECOMMERCE" => "N",	// Включить отправку данных в электронную торговлю
// 		"SET_STATUS_404" => "N",	// Устанавливать статус 404
// 		"SHOW_404" => "N",	// Показ специальной страницы
// 		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
// 		"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
// 		"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
//         "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
//         "BLOCK_HEAD_TITLE" => $CHARS_HEAD_TITLE,
//         "CSS_ID" => "angary_tent_character"
// 	),
// 	false
// );

?>


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"slide_items", 
	array(
        "COMPONENT_TEMPLATE" => "slide_items",
        "HEAD_TITLE" =>'Производим ангары</b>Всех назначений',
        "IBLOCK_ID" =>8,
        "SLIDER_ID" =>40,
        "CSS_CLASS" =>'slide_items_angary',
        "PREF_SLIDER" =>'doubleSlider'
    ),
	false
);?>


<?$APPLICATION->IncludeComponent(
	"doweb:page.sections", 
	"blueprint", 
	array(
        "COMPONENT_TEMPLATE" => "blueprint",
		"HEAD_DESCRIPTION" => 'Получите чертеж вашего ангара',
        "LEFT_IMAGE_SRC" => '/local/dist/images/angar_cherteg.png'
      
    ),
	false
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

