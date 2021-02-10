    
    <section id="map">
        <div class="h1 text-center"><b class="d-block">контакты</b>и карта проезда</div>
        <div class="container">
            <div class="fly-box">
                <div class="form-wrap next-form-wrap">
                    <ul class="mb-lg-5 pb-1">
                        <li><i class="icon icon-o_marker"></i>Адрес:
                            <b>г. Иркутск, ул. Ракитная 16А</b></li>
                        <li><i class="icon icon-o_phone"></i>What's app, Viber, Telegram
                            <b>8 (3952) 74-53-24</b>
                        </li>
                        <li><i class="icon icon-o_mail"></i>E-Mail:
                            <b>mail@polyarnik.com</b></li>
                    </ul>

                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "in_map",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"in_map",
                                "TITLE" =>  "Заказать консультацию",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Оставить заявку",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "mail", "tel"
                                )
                            ),
                            false
                        );?>
                                    


                </div>
            </div>
        </div>
        <div id="j-map"></div>
    </section>

