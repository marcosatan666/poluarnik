<section id="moduli_cost" class="cost">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 mb-5">
                <div class="section-title">
                    <span class="h3">Получите расчет</span>
                    <div class="c_orange"><em>Коммерческого предложения</em></div>
                    <div class="h3 small">Для получения коммерческого <br>предложения на почту заполните <br>форму</div>
                    <img src="/local/dist/images/kp_modul.png" alt class="title-img">
                </div>
            </div>
            <div class="col-lg-2 mb-5">
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
                                "SUBMIT_NAME" => "Записаться на экскурсию",
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