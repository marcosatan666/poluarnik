<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="vagon_kp" class="moduli_kp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <div class="section-title">
                    <span class="h3"><?=$arParams['HEAD_TITLE']?></span>
                    <div class="c_orange"><em><?=$arParams['HEAD_DESCRIPTION']?></em></div>
                    <p class="small"><?=html_entity_decode($arParams['SMALL_DESCRIPTION'])?></p>
                    <img src="<?=$arParams['DOC_IMAGE_SRC']?>" alt="" class="title-img">
                </div>
            </div>
            <div class="col-lg-4 order-lg-1">
                
                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>$arParams['FORM_ID'],
                                "TITLE" =>  " Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Получить предложения",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "tel", "mail"
                                )
                            ),
                            false
                        );?>
            
            
            
        </div>
    </div>
</section>

