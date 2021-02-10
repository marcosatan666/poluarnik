<div class="head-text">
    <p class="bold mb-0">Строим прибыльные </p>
    <div class="h1">ТОРГОВЫЕ ПАВИЛЬОНЫ </div>
    <p class="bold">с доставкой и монтажом <br>по Иркутской области </p>
    
    <?$APPLICATION->IncludeComponent(
        "doweb:simple.forms",
        "",
        array(
            "FORM_IBLOCK_ID" =>"",
            "FORM_ID" =>"head-text",
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