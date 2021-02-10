<section id="d_visual" class="angar-visual">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 mb-5">
                <div class="section-title mb-4">
                    <div class="c_orange"><em>Закажите<br />Чертеж</em></div>
                    <span class="h3">Получите чертеж<br />вашего ангара</span>
                </div>
                <div class="fly-image-wrap">
                 <img src="/local/dist/images/angar.sandvich.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2 mb-5 d-none d-lg-block">
                <div class="fly-wrap">
                    <img src="/local/dist/images/angar.sandvichi_3d.png" alt="" class="img_front-page" />
                </div>
            </div>
            <div class="col-lg-4">

            
            <?$APPLICATION->IncludeComponent(
                "doweb:simple.forms",
                "",
                array(
                    "FORM_IBLOCK_ID" =>"",
                    "FORM_ID" =>"d_visual",
                    "TITLE" =>  " Введите контактные данные",
                    "DESC" =>   "Закажите обратный звонок",
                    "SUBMIT_NAME" => "Получить чертеж",
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