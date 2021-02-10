<div class="head-text mt-3">
    <div class="row">
        <div class="col-lg-6 order-lg-2">
            <div id="slider_wrap" class="row mx-0">
                <div class="col-lg-9 order-lg-2">
                    <div id="j-vagon_head_slider">
                        <div>
                            <img src="/local/images/png/vagon/slide_1.png" alt>
                        </div>
                        <div>
                            <img src="/local/images/png/vagon/slide_2.png" alt>
                        </div>
                        
                        <div>
                            <img src="/local/images/png/vagon/slide_3.png" alt>
                        </div>                
                    </div>
                </div>

                <div class="col-lg-3 order-lg-1 px-0">
                        <p class="slide-title active" data-slide="0">На шасси<i class="ic"></i></p>
                        <p class="slide-title " data-slide="1">На раме<i class="ic"></i></p>
                        <p class="slide-title " data-slide="2">На санях<i class="ic"></i></p>                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-1">
            <p class="bold mb-0">Производство</p>
            <div class="h1">Вагон - домов</div>
            <p class="bold mb-0">под ключ в иркутске<br>с доставкой по РФ</p>
            <span class="shine"> </span>
                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"head-text",
                                "TITLE" =>  "Узнайте стоимость вагон-дома за 5 минут по телефону",
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