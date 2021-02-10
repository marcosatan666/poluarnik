<section id="angary_cost" class="cost">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 mb-3 mb-lg-5">
                <div class="section-title">
                    <div class="c_orange"><em>Узнайте<br />цену Ангара</em></div>
                    <span class="h3">и получите индивидуальное
                        Коммерческое предложение </span>
                    <img src="/local/dist/images/png/angar/anagr_cost.png" alt="" class="title-img">
                </div>
            </div>
            <div class="col-lg-2 mb-lg-5">
                <img src="/local/dist/images/png/angar/kp_angar.png" alt="" class="doc-img" />
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
                                "SUBMIT_NAME" => "Записаться на экскурсию",
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