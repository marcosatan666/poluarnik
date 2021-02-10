<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$AR_SECTION = $arParams['ARRAY_SECTION']?>



<div class="site-header py-4">
    <div class="container">
            
            <?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . "/include/menu.php",
                array(),
                array(
                    "MODE"     => "php",
                    "NAME"     => "",
                    "TEMPLATE" => "include_area.php",
                )
            );?>

            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb",".default",Array(
                "START_FROM" => "0", 
                "PATH" => "", 
                "SITE_ID" => "s2" 
            )
            );?>

            <?//$APPLICATION->AddChainItem("Модульные здания" , "/modulnie-zdaniya/");?>
            <?//$APPLICATION->AddChainItem($AR_SECTION["NAME"] , "");?>

            <div class="head-text mt-3">
         
                <?php if (strlen($AR_SECTION["UF_PROMO_STR"] > 0)): ?>    

                <div class="h1"><?=html_entity_decode($AR_SECTION["UF_H1"])?></div>
                <p class="bold"><?=html_entity_decode($AR_SECTION["UF_SHINE"])?></p>
                <div class="promo-exp super_int text-right"><?=$AR_SECTION["UF_PROMO_STR"]?></div>

                <?$APPLICATION->IncludeComponent(
                                "doweb:simple.forms",
                                "",
                                 array(
                                     "FORM_IBLOCK_ID" =>"",
                                     "FORM_ID" =>"head-text",
                                     "TITLE" =>  "Узнайте стоимость за 5 минут по телефону",
                                     "DESC" =>   "",
                                     "SUBMIT_NAME" => "Узнать стоимость",
                                     "TYPE" =>'INLINE_VERTICAL',
                                     "FIELDS" => array(
                                          "tel"
                                         )
                                    ),
                                    false
                                );?>
                <?  else:?>
                
                    
                        <div class="row">

                                <div class="col-12">
                                    <p class="bold"><?=$AR_SECTION['UF_PREH1']?></p>
                                    <div class="h1"><?=html_entity_decode($AR_SECTION["UF_H1"])?></div>
                                    <p class="bold"><?=html_entity_decode($AR_SECTION["UF_SHINE"])?></p>
                                    
                                    <span class="shine"> </span>
                                </div>
                                <div class="col-lg-8 order-2 order-lg-1">
                                    
                                    <?$APPLICATION->IncludeComponent(
                                        "doweb:simple.forms",
                                        "",
                                        array(
                                            "FORM_IBLOCK_ID" =>"",
                                            "FORM_ID" =>"head-text",
                                            "TITLE" =>  "Узнайте стоимость за 5 минут по телефону",
                                            "DESC" =>   "",
                                            "SUBMIT_NAME" => "Узнать стоимость",
                                            "TYPE" =>'INLINE_VERTICAL',
                                            "FIELDS" => array(
                                                "tel"
                                                )
                                            ),
                                            false
                                        );?>

                                </div>
                        </div>

                <?php endif; ?>
    
        </div>

    </div>     
</div>


