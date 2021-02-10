
<section id="vagon_kp" class="moduli_kp">
    <div class="container">
        <div class="row">
                    <div class="col-lg-8 order-lg-2">
                <div class="section-title">
                    <div class="h3">Получите на почту</div>
                    <div class="c_orange"><em>Прайс-лист</em></div>
                    <p class="small">с размерами </p>
                    <span class="h3"><b>от 3 до 12 метров</b></span>
                   
                </div>
                 <img src="/local/dist/images/png/moduli/kp_moduli.png" alt="" class="title-img">
           
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
                                "SUBMIT_NAME" => "Получить прайс",
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
