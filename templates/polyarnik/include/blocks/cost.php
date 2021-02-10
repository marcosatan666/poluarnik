<section class="cost">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 mb-lg-5">
                    <div class="section-title">
                        <div class="c_orange"><em>узнайте стоимость</em></div>
                        <span class="h3">Получите коммерческое предложение</span>
                        <img src="/local/dist/images/vagon.png" alt class="title-img">
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
                                "FORM_ID" =>"vagon_cost",
                                "TITLE" =>  "Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Получить предложение",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "mail", "tel"
                                )
                            ),
                            false
                        );?>

                    
                </div>
            </div>
        </div>
    </section>