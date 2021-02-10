<section id="delivery" class="angar-building">
    <div class="container">
        <div class="h1 text-center mb-lg-5 pb-4">
            <b>Строим ангары
            </b><br />
             на территории сибири и дальнего востока</div>
        <div class="wrap">
           <!--  <div class="h3">Узнайте как сэкономить<br />на доставке <b class="c_orange"><em>до 300%</em></b></div> -->
             <div>Готовые комплекты доставляем</div>
            <div class="c_orange">Автомобильным, железнодорожным,<br /> 
            водным или воздушным транспортом</div>
            <div>по Иркутской области и РФ</div>
            <!-- <a href="#x" class="btn" >Подробнее о ТРАНСПАК</a> -->
             <img src="/local/dist/images/png/angar/track_vagon.png" alt="" class="d-block img-fluid">
        </div>

        <?$APPLICATION->IncludeComponent(
		"doweb:simple.forms",
		"inline-box",
		array(
            "FORM_IBLOCK_ID" =>"",
            "FORM_ID" =>"angar-building",
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