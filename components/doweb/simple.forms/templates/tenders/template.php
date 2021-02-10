<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="form-wrap">
        <form action="" method="post" id="formAjax">
            <p class="form_title tac mt-1"><?=$arParams['TITLE']?></p>
            <p class="desc mb-3"><?=$arParams['DESC']?></p>
            <?=bitrix_sessid_post()?>
            <?  foreach ($arParams['FIELDS'] as $key=>$strfield) {?>

                <?if($strfield =="message"){?>
                    <div class="has-float-label">
                        <textarea name="message" cols="30" rows="10"  class="form-control mb-3 required" placeholder="Пояснение"></textarea>
                    </div>
                <?}?>     

                   
                <?if($strfield =="company"){?>

                            <div class="has-float-label">
                                <input type="text" name="company" class="form-control mb-3 required" placeholder="Наименование организации" />
                                <label for="company">Наименование организации</label>
                            </div>

                <?}?>     

                <?if($strfield =="mail"){?>

                        <div class="has-float-label">
                            <input type="mail" name="mail" class="form-control mb-3 required" placeholder="Эл. почта" />
                            <label for="mail">Эл. почта</label>
                        </div>

                <?}?>

                <?if($strfield =='tel'){?>
                       
                        <div class="has-float-label">
                            <input type="tel" name="phone"  class="form-control mb-3 required" placeholder="Телефон">
                            <label for="tel">Телефон</label>
                        </div>
                    
                <?}?>

             <?}?>
            

            <input type="submit" class="btn mb-3 btn-orange col-12 j-send" value="<?=$arParams['SUBMIT_NAME']?>">

            <div class="custom-control custom-checkbox mt-lg-3">
                <input type="checkbox" name="policy" class="custom-control-input" id="policy_<?=$arParams['FORM_ID']?>" checked>
                <label class="custom-control-label" for="policy_<?=$arParams['FORM_ID']?>">
                    <b>Согласен с обработкой <br> персональных данных</b>
                </label>
            </div>
        </form>
    </div>