<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section id="delivery">
    <div class="container">
        <div class="h1 text-center mb-lg-5 pb-4"><?=html_entity_decode($arParams['HEAD_TITLE'])?></div>
        <div class="wrap">
            <div class="h3"><?=html_entity_decode($arParams['HEAD_DESCRIPTION'])?></div>
            <!-- <a href="#x" class="btn" >Подробнее о ТРАНСПАК</a> -->
            <div class="img_container"><img src="<?=$arParams['CENTER_IMAGE_SRC']?>" /></div>
        </div>

        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "inline-box",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"form-delivery",
                                "TITLE" =>  " Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Оставьте заявку",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "tel", "mail"
                                )
                            ),
                            false
                        );?>


        
    </div>
</section>