<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="angary_cost" class="cost">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 mb-3 mb-lg-5">
                <div class="section-title">
                    <span class="h3"><?=$arParams['HEAD_DESCRIPTION']?></span>
                    <div class="c_orange"><em><?=$arParams['HEAD_TITLE']?></em></div>
                    <img src="<?=$arParams['LEFT_IMAGE_SRC']?>" alt="" class="title-img">
                </div>
            </div>
            <div class="col-lg-2 mb-lg-5">
                <img src="<?=$arParams['DOC_IMAGE_SRC']?>" alt="" class="doc-img" />
            </div>
            <div class="col-lg-4">
              

                        <?$APPLICATION->IncludeComponent(
                            "doweb:simple.forms",
                            "",
                            array(
                                "FORM_IBLOCK_ID" =>"",
                                "FORM_ID" =>"angary_cost_excurtions",
                                "TITLE" =>  "Введите контактные данные",
                                "DESC" =>   "",
                                "SUBMIT_NAME" => "Получить планировку",
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
</section>