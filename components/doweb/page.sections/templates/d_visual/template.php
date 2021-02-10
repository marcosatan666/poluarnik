<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="d_visual">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 mb-5">
                <div class="section-title mb-4">
                    <div class="c_orange"><em><?=html_entity_decode($arParams['HEAD_TITLE'])?></em></div>
                    <span class="h3"><?=html_entity_decode($arParams['HEAD_DESCRIPTION'])?></span>
                </div>
                <p class="bold"><?=html_entity_decode($arParams['TEXT'])?></p>
                <img src="<?=$arParams['DOC_IMAGE_SRC']?>" alt="" class="d_visual__left"/>
            </div>
            <div class="col-lg-2 mb-5">
                <div class="fly-wrap">
                    <img src="<?=$arParams['LEFT_IMAGE_SRC']?>" alt class="img_front-page">
                </div>
            </div>
            <div class="col-lg-4">

                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>$arParams['FORM_ID'],
                                "TITLE" =>  " Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Заказать визуализацию",
                                "TYPE" =>'INLINE_VERTICAL',
                                "FIELDS" => array(
                                    "tel", "mail"
                                )
                            ),
                            false
                        );?>
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="col-lg-6 px-0">
                    <p class="small-text"><?=html_entity_decode($arParams['SMALL_TEXT'])?></p>
                </div>
            </div>
        </div>
    </div>
</section>

