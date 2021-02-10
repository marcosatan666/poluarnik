<section class="cost">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 mb-lg-5">
                    <div class="section-title">
                        <span class="h3">Получите на почту</span>
                        <div class="c_orange"><em>Каталог</em></div>
                        <span class="h3">Укомплектованных</span>
                        <div class="c_orange"><em>Вагон-домов</em></div>
                        <img src="/local/dist/images/slide_2.png" alt class="title-img">
                    </div>
                </div>
                <div class="col-lg-2 mb-lg-5">
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
