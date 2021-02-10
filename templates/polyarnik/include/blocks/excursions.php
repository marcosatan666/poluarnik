<section id="excursions">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 section-title mb-5">
                    <span class="h3">Приглашаем на</span>
                    <div class="c_orange"><em>ЭКСКУРСИЮ</em></div>
                    <span class="h3">по производству</span>
                </div>
                <div class="col-lg-6 d-lg-flex align-items-center">
                    <div class="col-lg-4 c_orange">
                        >2 000 м²
                    </div>
                    <div class="col-lg-3  px-0">
                        Производственные помещения
                    </div>
                    <div class="col-lg-3 c_orange  px-0">
                        1 000 м²
                    </div>
                    <div class="col-lg-2">
                        Складские
                        помещения
                    </div>
                </div>
                <div class="col-lg-6">
                <?$APPLICATION->IncludeComponent(
                        "doweb:simple.forms",
                        "",
                        array(
                            "FORM_IBLOCK_ID" =>"",
                            "FORM_ID" =>"excurtions",
                            "TITLE" =>  "Введите контактные данные",
                            "DESC" =>   "",
                            "SUBMIT_NAME" => "Записаться на экскурсию",
                            "TYPE" =>'INLINE_VERTICAL',
                            "FIELDS" => array(
                                "mail", "tel"
                            )
                        ),
                        false
                    );?>
                   
                </div>
                <div class="col-lg-6  d-none d-lg-block">
                    <div class="thumb-wrap pl-3 ml-4">
                        <img src="/local/dist/images/thumb-excursion.png" alt class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>