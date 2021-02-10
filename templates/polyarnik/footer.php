<?$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/blocks/map.php",
    array(),
    array(
        "MODE"     => "php",
        "NAME"     => "",
        "TEMPLATE" => "include_area.php",
    )
);?>

<div class="site-footer pt-5 pb-3">
    <div class="container pt-lg-4">
        <div class="row no-gutters mb-4">
            <a href="/" class="d-block mr-2">
                <img src="<?=DIST_PATH?>/images/png/logo.png" alt="" style="max-width: 120px">
            </a>


            <?$APPLICATION->IncludeComponent(
            "bitrix:menu", "foot_menu", array(  
                "ROOT_MENU_TYPE"        => "second",
                "MAX_LEVEL"             => "1",
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
            
          
        
        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/include/static/foot.contacts.php",
            array(),
            array(
                "MODE"     => "php",
                "NAME"     => "Контакты в подвале",
                "TEMPLATE" => "include_area.php",
            )
        );?>



        </div>
        <div class="row no-gutters pt-lg-4">
            <div class="col-lg-2">
                <ul class="list-unstyled reky mb-lg-5 pt-3">
                    <li class="mb-1">г. Иркутск,</li>
                    <li class="mb-1">ул. Ракитная 16А</li>
                </ul>
                <ul class="list-unstyled reky">
                    <li class="mb-1">Время работы:</li>
                    <li class="mb-1">Пн-Пт: 09:00 - 18:00</li>
                    <li class="mb-1">Сб-Вс: выходной</li>
                </ul>
            </div>
            <div class="col-lg-7 ml-lg-3">
                <nav class="nav d-flex align-items-center navTop">
                    <a href="#gallery" class="slide_to n_link">Наши работы</a>
                    <a href="#about" class="slide_to n_link">Сертификаты </a>
                    <a href="#reviews" class="slide_to n_link">Отзывы</a>
                    <a href="#map" class="slide_to n_link">Контакты</a>
                    <button class="btn btn-grey j-show-modal pl-3" data-form="formRecall"><span>Пригласить в тендер</span><i class="icon icon-gerb"></i></button>
                </nav>
            </div>
            <div class="col-lg-2 pr-0">
                <ul class="list-unstyled rekvizity pt-4">
                    <li class="mb-1">Реквизиты:</li>
                    <li class="mb-1">ИНН: 3812526787</li>
                    <li class="mb-1">КПП: 381201001</li>
                    <li class="mb-1">ОГРН: 1193850006393</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <div class="social">
            <a href=""><i class="icon icon-wts"></i></a>
            <a href="" class="mx-4"><i class="icon icon-tg"></i></a>
            <a href=""><i class="icon icon-vbr"></i></a>
        </div>
        <p class="pt-3">© 2020 «Полярник» Все права защищены. Копирование материала запрещено</p>
    </div>
</div>

<button id="buttonUp" type="button"><i class="icon icon-down"></i></button>


    <link rel="stylesheet" href="<?=DIST_PATH?>libs/jquery.fancybox.css">
    <link rel="stylesheet" href="<?=DIST_PATH?>css/bottom_style.css">





    <style>

    
/* 
     .advantages img {
        max-width: 732px;
        position: relative;
        top: 6.6rem;
     } */

    </style>

</body>
</html>