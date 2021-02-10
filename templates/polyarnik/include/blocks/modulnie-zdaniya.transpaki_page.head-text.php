<div class="head-text my-4 my-lg-3">
    <div class="h1">Транспаки</div>
    <p class="bold">Экономия на доставке <br/>до 300% </p>
    <div class="promo-exp super_int text-right">3=1</div>
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
            )),
            false
        );
    ?>                    
</div>