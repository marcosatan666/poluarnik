<div class="head-text mt-3">
    <p class="bold mb-0">Быстровоспроизводимые здания и конструкции:</p>
    <div class="h1 mb-4">Производство и сборка <br>"под ключ"</div>
   

    <?$APPLICATION->IncludeComponent(
		"doweb:simple.forms",
		"",
		array(
            "FORM_IBLOCK_ID" =>"",
            "FORM_ID" =>"main_head",
            "TITLE" =>  "Узнайте стоимость по телефону",
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