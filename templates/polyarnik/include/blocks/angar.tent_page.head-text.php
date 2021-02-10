<div class="head-text mt-3">
    <div class="row">
        <div class="col-12">
            <div class="h1">Строим тентовые ангары</div>
            <p class="bold">любого размера<br />и назначения</p>
            <span class="shine">&nbsp;</span>
        </div>
        <div class="col-lg-8 order-2 order-lg-1">
            <?$APPLICATION->IncludeComponent(
                "doweb:simple.forms",
                "",
                array(
                    "FORM_IBLOCK_ID" =>"",
                    "FORM_ID" =>"angary_cost_excurtions",
                    "TITLE" =>  "Узнайте стоимость ангара за 5 минут по телефону",
                    "DESC" =>   " Закажите обратный звонок",
                    "SUBMIT_NAME" => "Узнать стоимость",
                    "TYPE" =>'INLINE_VERTICAL',
                    "FIELDS" => array(
                       "tel"
                    )
                ),
                false              
            );?>
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
            <div id="slider_wrap">
                 <?/*<img src="/local/dist/images/angar_slide_2.png" alt class="img-fluid">*/?>
                 <img src="/local/dist/images/angar.tent_top.png" alt class="img-fluid">
            </div>
        </div>
    </div>
</div>