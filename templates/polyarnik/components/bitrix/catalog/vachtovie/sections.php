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
$APPLICATION->AddChainItem("Вахтовые поселки", "/".$APPLICATION->GetCurDir()."/");
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


<?
$APPLICATION->IncludeComponent("bitrix:catalog.top", "vachtovie", array(
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ELEMENT_SORT_FIELD" => $arParams["TOP_ELEMENT_SORT_FIELD"],
    "ELEMENT_SORT_ORDER" => $arParams["TOP_ELEMENT_SORT_ORDER"],
    "ELEMENT_SORT_FIELD2" => $arParams["TOP_ELEMENT_SORT_FIELD2"],
    "ELEMENT_SORT_ORDER2" => $arParams["TOP_ELEMENT_SORT_ORDER2"],
    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
    "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
    "BASKET_URL" => $arParams["BASKET_URL"],
    "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
    "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
    "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
    "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
    "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
    "ELEMENT_COUNT" => $arParams["TOP_ELEMENT_COUNT"],
    "LINE_ELEMENT_COUNT" => $arParams["TOP_LINE_ELEMENT_COUNT"],
    "PROPERTY_CODE" => array("PRICE"),
    "PROPERTY_CODE_MOBILE" => $arParams["TOP_PROPERTY_CODE_MOBILE"],
    "PRICE_CODE" => $arParams["~PRICE_CODE"],
    "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
    "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
    "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
    "PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
    "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
    "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
    "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
    "PRODUCT_PROPERTIES" => (isset($arParams["PRODUCT_PROPERTIES"]) ? $arParams["PRODUCT_PROPERTIES"] : []),
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
    "CACHE_TIME" => $arParams["CACHE_TIME"],
    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
    "OFFERS_CART_PROPERTIES" => (isset($arParams["OFFERS_CART_PROPERTIES"]) ? $arParams["OFFERS_CART_PROPERTIES"] : []),
    "OFFERS_FIELD_CODE" => $arParams["TOP_OFFERS_FIELD_CODE"],
    "OFFERS_PROPERTY_CODE" =>array("PRICE"),
    "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
    "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
    "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
    "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
    "OFFERS_LIMIT" => (isset($arParams["TOP_OFFERS_LIMIT"]) ? $arParams["TOP_OFFERS_LIMIT"] : 0),
    'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
    'CURRENCY_ID' => $arParams['CURRENCY_ID'],
    'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
    'VIEW_MODE' => (isset($arParams['TOP_VIEW_MODE']) ? $arParams['TOP_VIEW_MODE'] : ''),
    'ROTATE_TIMER' => (isset($arParams['TOP_ROTATE_TIMER']) ? $arParams['TOP_ROTATE_TIMER'] : ''),
    'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),

    'LABEL_PROP' => $arParams['LABEL_PROP'],
    'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
    'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
    'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
    'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
    'PRODUCT_BLOCKS_ORDER' => $arParams['TOP_PRODUCT_BLOCKS_ORDER'],
    'PRODUCT_ROW_VARIANTS' => $arParams['TOP_PRODUCT_ROW_VARIANTS'],
    'ENLARGE_PRODUCT' => $arParams['TOP_ENLARGE_PRODUCT'],
    'ENLARGE_PROP' => isset($arParams['TOP_ENLARGE_PROP']) ? $arParams['TOP_ENLARGE_PROP'] : '',
    'SHOW_SLIDER' => $arParams['TOP_SHOW_SLIDER'],
    'SLIDER_INTERVAL' => isset($arParams['TOP_SLIDER_INTERVAL']) ? $arParams['TOP_SLIDER_INTERVAL'] : '',
    'SLIDER_PROGRESS' => isset($arParams['TOP_SLIDER_PROGRESS']) ? $arParams['TOP_SLIDER_PROGRESS'] : '',

    'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
    'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
    'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
    'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
    'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
    'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
    'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
    'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
    'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
    'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
    'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'],
    'ADD_TO_BASKET_ACTION' => $basketAction,
    'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
    'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
    'USE_COMPARE_LIST' => 'Y',

    'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : '')
),
$component
);
?>


    <!-- vacht only -->
   

    <?$APPLICATION->IncludeComponent(
        "doweb:page.sections", 
        "moduli_kp", 
        array(
            "COMPONENT_TEMPLATE" => "cost",
            "HEAD_TITLE" => 'Получите расчет',
            "HEAD_DESCRIPTION" => 'коммерческого предложения',
            "LEFT_IMAGE_SRC" => 'Для получения коммерческого <br> предложения на почту заполните <br> форму',
            "DOC_IMAGE_SRC" => '/local/dist/images/kp_moduli.png'
        ),
        false
    );?>

    
    <section id="catalog">
        <div class="container px-0 pb-5">
            <div class="h1 text-center"><b>Состав вахтовых поселков</b> <br> может включать в себя</div>
            <div class="catalog">
                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Блок контейнеры</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product1.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Вагон-дома на санях</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product2.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Вагон дома на шасси</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product3.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Модульные здания</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product4.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Ангары из сендвич панелей</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product5.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


                <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                    <div class="good">
                        <p class="title mb-0">Тентовые ангары</p>
                        <hr class="decor">
                        <div class="img"><img src="/local/dist/images/product6.png" alt class="img-fluid"></div>
                        <a href="/vagon-doma/" onclick="popup(6, this)" class="btn btn-orange">Подробнее</a>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <?$APPLICATION->IncludeComponent(
        "doweb:page.sections", 
        "full-cycle", 
        array(
            "IBLOCK_ID" =>17,
            'INFO_LIST_ID' => 48,
            "COMPONENT_TEMPLATE" => "full-cycle",
            "CARD_CSS" => 'col-6 col-md-3 step',
            "HEAD_TITLE" => '<strong>Полный цикл строительства</strong><br>от производителя',
        ),
        false
    );?>


    <?$APPLICATION->IncludeComponent(
            "doweb:catalog.elements", 
            "vacht_plans", 
            array(
            'IBLOCK_ID' =>13,
            'IBLOCK_SECTION_ID' => 49,//TODO Планировки заполнить для поселков
            "HEAD_TEXT" => " <b>Типовые планировки</b><br> Вахтовых поселков",
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
            "HEAD_TITLE" => 'Вахтового поселка',
            "HEAD_DESCRIPTION" => 'Получите планировку нужного вам',
            "LEFT_IMAGE_SRC" => '/local/dist/images/slide_2.png',
            "DOC_IMAGE_SRC" => '/local/dist/images/front_page.png'
        ),
        false
    );?>
    


    <section class="text-block">
        <div class="container">
            <p class="col-lg-9 mx-auto text-center">Тут будет текст для СЕО.... Ежедневно наша команда создаёт надёжный продукт и постоянно повышает качество товаров и услуг. Перед началом производства мы проектируем каждую модель в 3D пространстве, это позволяет продумать все детали, совместить
                комфорт и надёжность в нашей продукции «Полярник». Изготавливаем здания нестандартных размеров по индивидуальным проектам. Качество нашей продукции подтверждают сертификаты соответствия ГОСТ 22853-86 и ТУ 5363.</p>
        </div>
    </section>

    <?$APPLICATION->IncludeComponent(
        "doweb:page.sections", 
        "delivery", 
        array(
            "COMPONENT_TEMPLATE" => "delivery",
            "HEAD_TITLE" => ' <b>Заказать вахтовый поселок
            </b><br> с доставкой по иркутской области и рф',
            "HEAD_DESCRIPTION" => 'Узнайте, как сэкономить<br />на доставке <b class="c_orange"><em>до 300%</em></b>',
            "CENTER_IMAGE_SRC" => '/local/dist/images/png/cars.png'
        ),
        false
    );?>
    
    <!--./vacht only -->

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








