  <section id="delivery">
        <div class="container">
            <div class="h1 text-left text-lg-center mb-lg-5 pb-4">
                <b>Доставим в срок</b>
                <span class="c_orange"> Железнодорожным<br>
                    и автомобильным транспортом</span><br>
                по иркутской области и РФ</div>
            <div class="wrap">
                <div class="h3">Узнайте, как сэкономить<br>на доставке <b class="c_orange"><em>до 300%</em></b></div>
                <!-- <a href="#x" class="btn" >Подробнее о ТРАНСПАК</a> -->
                <img class="lazy img-fluid" src="/local/dist/images/png/cars.png">
            </div>

            <?$APPLICATION->IncludeComponent(
                "doweb:simple.forms",
                "inline-box",
                array(
                    "FORM_IBLOCK_ID" =>"",
                    "FORM_ID" =>"form-delivery",
                    "TITLE" =>  "Узнайте по телефону",
                    "DESC" =>   "Закажите обратный звонок",
                    "SUBMIT_NAME" => "Узнать стоимость",
                    "TYPE" =>'INLINE_VERTICAL',
                    "FIELDS" => array(
                        'tel'
                    )
                ),
                false
            );?>

        </div>
    </section>