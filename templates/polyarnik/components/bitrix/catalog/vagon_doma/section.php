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

$rsSections = CIBlockSection::GetList(
    array(),
    array('IBLOCK_ID' => 10, '=CODE' => $arResult['VARIABLES']['CODE'], 'GLOBAL_ACTIVE' => 'Y'),
    false,
    Array('UF_*','SECTION_CODE')
);

$APPLICATION->AddChainItem($APPLICATION->GetPageProperty("h1"), $arParams['SEF_FOLDER']);

if ($arSection = $rsSections->Fetch())
{
    $APPLICATION->AddChainItem($arSection['NAME'], "");
?>

<div class="site-header py-4">
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

        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
            "START_FROM" => "0", 
            "PATH" => "", 
            "SITE_ID" => "s2" 
        )
        );?>
        
    <div class="head-text">
                <div class="row">
                    <div class="col-12">

                    <p class="bold"><?=$arSection['UF_PREH1']?></p>
                            <div class="h1"><?=$arSection['UF_H1']?></div>
                            <p class="bold"><?=$arSection['UF_SHINE']?></p>
                            <span class="shine"> </span>

                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <!-- TODO вынести -->   
                        <?$APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . "/include/blocks/vagon_head_slider.php",
                            array(),
                            array(
                                "MODE"     => "php",
                                "NAME"     => "",
                                "TEMPLATE" => "include_area.php",
                            )
                        );?>
                    </div>

                    <div class="col-lg-6 order-lg-1">

                           
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

<?if($arSection['ID'] == 57){?>

    <?$APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . "/include/blocks/vagon-ready2.php",
        array(),
        array(
            "MODE"     => "php",
            "NAME"     => "",
            "TEMPLATE" => "include_area.php",
        )
    );?>

    <section id="vagon_kp" class="moduli_kp-transpaki">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-2">
                    <div class="section-title">
                        <span class="h3">Получите расчет</span>
                        <div class="c_orange"><em>коммерческого предложения</em></div>
                        <p class="small">Для получения коммерческого <br> предложения на почту заполните <br> форму</p>
                        <img src="/local/dist/images/png/moduli/kp_moduli.png" alt="" class="title-img">
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                   
                      
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
                                        "tel","mail"
                                    )
                                ),
                                false        
                            );?>


                </div>
            </div>
        </div>
    </section>

    
  
    <section id="vagon_top_catalog">
        <div class="container">
        <div class="h1 text-center"><strong>Производим</strong> <br>Блок - контейнеры</div>
            <div class="catalog">
                    <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                        <div class="good">
                            <p class="title mb-0">На шасси</p>
                            <hr class="decor">
                            <div class="img">
                                <img src="/local/images/png/vagon/slide_1.png" height="150">
                            </div> 
                        </div>
                    </div>
                    <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                        <div class="good">
                            <p class="title mb-0">На санях</p>
                            <hr class="decor">
                            <div class="img">
                                <img src="/local/images/png/vagon/slide_2.png" height="150">
                            </div> 
                           
                          
                        </div>
                    </div>

                    <div class="good_wrapper col-12 col-sm-6 col-lg-4">
                        <div class="good">
                            <p class="title mb-0">На раме</p>
                            <hr class="decor">
                            <div class="img">
                                <img src="/local/images/png/vagon/slide_3.png" height="150">
                            </div> 
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <? include("include/filter.php");?>


    <?$APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . "/include/blocks/vagon_diesel_price-cats.php",
        array(),
        array(
            "MODE"     => "php",
            "NAME"     => "",
            "TEMPLATE" => "include_area.php",
        )
    );?>

<section class="cost cost-bks">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8 mb-lg-5">
                    <div class="section-title">
                        <span class="h3">Получите на почту</span>
                        <div class="c_orange"><em>Каталог</em></div>
                        <span class="h3">Укомплектованных</span>
                        <div class="c_orange"><em>Блок - контейнеров</em></div>
                        <img src="/local/dist/images/slide_2.png" alt class="title-img">
                    </div>
                    <img src="/local/dist/images/front_page.png" alt class="doc-img">
                </div>
             
                <div class="col-lg-4">

                <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"head-text",
                                "TITLE" =>  "Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Получить каталог",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "tel", "mail"
                                )
                            ),
                            false
                        );?>
                    
                </div>
            </div>
        </div>
    </section>




  
<?} else {?>

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

        <? include("include/filter.php");?>

        <?$APPLICATION->IncludeFile(
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




<?}?>




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














