<?$APPLICATION->IncludeComponent(
		"doweb:main.catalog",
		"",
		array(
			"IBLOCK_IDS" => array(11,13,10,12,14,16),
			"IBLOCK_HEADS" => array(
				11 =>'Ангары',
				10 =>'Вагон - Дома',	
				12 =>'Вахтовые поселки',
				13 =>'Модульные здания',
				14 =>'Торговые павильоны',
				16 => 'Металлоконструкции'
			),
			"IBLOCK_THUMBS_PATH" => array(
				11 =>'/local/dist/images/product5.png',
				10 =>'/local/dist/images/slide_2.png',	
				12 =>'/local/dist/images/kp_modul.png',
				13 =>'/local/dist/images/png/moduli/Building2_.png',
				14 =>'/local/dist/images/thumb_pavs.png',
				16 =>'/local/dist/images/metalloconstruction.png',

			),
			"IBLOCK_FOLDERS" => array(
				11 =>'angar',
				10 =>'vagon-doma',	
				12 =>'vachtovie',
				13 =>'modulnie-zdaniya',
				14 =>'pavs',
				16 => 'metalworks'
			)
		),
		false
	);?>