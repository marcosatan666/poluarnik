<div class="head-text mt-5">
    <div class="row">
        <div class="col-12">
            <div class="h1">Строим ангары</div>
            <p class="bold">любого размера<br>и назначения</p>
            <span class="shine"> </span>
        </div>
        <div class="col-lg-8 order-2 order-lg-1">
            
                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"angary_cost_excurtions",
                                "TITLE" =>  "Узнайте стоимость вагон-дома за 5 минут по телефону",
                                "DESC" =>   " Закажите обратный звонок",
                                "SUBMIT_NAME" => "Узнать стоимость",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "mail", "tel"
                                )
                            ),
                            false
                        );?>               
        
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
            <div id="slider_wrap">
                <div id="j-angar_head_slider">
                    <img src="/local/dist/images/angar_slide_3.png" alt class="img-fluid">
                    <img src="/local/dist/images/angar_slide_1.png" alt class="img-fluid">
                    <img src="/local/dist/images/angar_slide_2.png" alt class="img-fluid">
                </div>
                <div class="d-lg-flex slider-pager">
                    <p class="slide-title">Каркасно-тентовые</p>
                    <p class="slide-title ">Из сендвич-панелей</p>
                    <p class="slide-title ">Арочные</p>
                </div>
            </div>
        </div>
    </div>
</div>