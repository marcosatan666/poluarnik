<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="form-wrap inline-box">
    <form id="<?=$arParams['FORM_ID']?>">
        <?=bitrix_sessid_post()?>
        <div class="form-row align-items-center">
        <div class="col-md-6 col-lg-3 text-left pl-lg-4 mb-4 mb-lg-0">
                <b><?=$arParams['TITLE']?></b><br><?=$arParams['DESC']?>
            </div>

            <? foreach ($arParams['FIELDS'] as $key=>$strfield) {?>
                    

                    <?if($strfield =='tel'){?>
                       
                        <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-lg-0">
                            <div class="has-float-label">
                                <input id="tel1" type="tel" class="form-control required" placeholder="Телефон">
                                <label for="tel1">Телефон</label>
                            </div>
                        </div>
                                    

                    <?}?>

             <?}?>
            
             <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-lg-0">
                <button type="submit" class="btn btn-orange col-12 p-0"><?=$arParams['SUBMIT_NAME']?></button>
            </div>
            <div class="col-md-6 col-lg mb-4 mb-lg-0 order-lg-1">

                <div class="custom-control custom-checkbox col-md-6 col-lg px-0 order-lg-2 mb-0">
                    <input type="checkbox" name="policy" class="custom-control-input" id="policy_<?=$arParams['FORM_ID']?>" checked>
                    <label class="custom-control-label pl-3 politik" for="policy_<?=$arParams['FORM_ID']?>"><b>Согласен с обработкой <br> персональных данных</b></label>
                </div>       
               
            </div>
        </div>
    </form>
</div>

        