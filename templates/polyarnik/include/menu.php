<div class="row d-flex align-items-center no-gutters">
    <div class="col-lg-2">
        <a href="/" class="d-block"><img src="<?=DIST_PATH?>/images/logo.png" alt="" /></a>
    </div>
    <div class="col-lg-5 d-none d-lg-block">
        <nav class="nav d-flex justify-content-between navTop">
            <a class="p-2 slide_to" href="#gallery">Наши работы</a>
            <a class="p-2 slide_to" href="#about">Сертификаты </a>
            <a class="p-2 slide_to" href="#reviews">Отзывы</a>
            <a class="p-2 slide_to" href="#map">Контакты</a>
        </nav>
    </div>
    <div class="col-lg-2 d-none d-lg-block">
     <button class="btn btn-grey j-show-modal pl-3" data-form="formRecall"><span>Пригласить в тендер</span><i class="icon icon-gerb"></i></button>
    </div>
    <div class="col-lg-3 text-lg-right contacts">
      
        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/include/static/head.contacts.php",
            array(),
            array(
                "MODE"     => "php",
                "NAME"     => "Контакты в шапке",
                "TEMPLATE" => "include_area.php",
            )
        );?>

    </div>
    <div class="col-12 mt-3 d-none d-lg-block">

        <?$APPLICATION->IncludeComponent(
            "bitrix:menu", "lg_multilevel", array(
                "ROOT_MENU_TYPE"        => "second",
                "MAX_LEVEL"             => "4",
                "CHILD_MENU_TYPE"       => "left",
                "USE_EXT"               => "Y",
                "MENU_CACHE_TYPE"       => "A",
                "MENU_CACHE_TIME"       => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS"   => "",
            ),
            false,
            array(
                "ACTIVE_COMPONENT" => "Y",
            )
        );?>
             
    </div>
</div>



