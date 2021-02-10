<div class="head-text my-4 my-lg-3">
    <div class="row">
        <div class="col-12">
            <p class="bold mb-0">Проектирование и строительство</p>
            <div class="h1">Вахтовых поселков</div>
            <span class="shine"> </span>
        </div>
        <div class="col-lg-8 order-2 order-lg-1">
            <?$APPLICATION->IncludeComponent(
                "doweb:simple.forms",
                "",
                array(
                    "FORM_IBLOCK_ID" =>"",
                    "FORM_ID" =>"head-text",
                    "TITLE" =>  "Узнайте стоимость за 5 минут по телефону",
                    "DESC" =>   "",
                    "SUBMIT_NAME" => "Узнать стоимость",
                    "TYPE" =>'INLINE_VERTICAL',
                    "FIELDS" => array(
                         "tel"
                         )
                    ),
                    false
                );?>
        </div>

    </div>
</div>