<div class="head-text my-4 my-lg-5">
    <p class="bold mb-0">Строим </p>
    <div class="h1">МОДУЛЬНЫЕ ЗДАНИЯ </div>
    <p class="bold">с доставкой и монтажом <br>по РФ </p>


                         <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"vagon_cost",
                                "TITLE" =>  "Узнайте стоимость по телефону",
                                "DESC" =>   "Закажите обратный звонок",
                                "SUBMIT_NAME" => "Узнать стоимость",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "tel"
                                )
                            ),
                            false
                        );?>                    
    
    
</div>