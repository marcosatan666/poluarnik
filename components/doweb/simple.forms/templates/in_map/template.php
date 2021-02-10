<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
  
        <form action="" method="post">
        <?=bitrix_sessid_post()?>
            <p class="form_title tac mt-1"><?=$arParams['TITLE']?></p>
            <p class="desc mb-3"><?=$arParams['DESC']?></p>
            
            <?  foreach ($arParams['FIELDS'] as $key=>$strfield) {?>
                    
                <?if($strfield =="mail"){?>
                    <div class="has-float-label">
                        <input type="mail" class="form-control mb-3 required" placeholder="Например, ivan@ivanov.ru" />
                        <label for="mail">Эл. почта</label>
                    </div>

                <?}?>
                <?if($strfield =='tel'){?>
                    <div class="has-float-label">
                        <input type="tel" class="form-control mb-3 required" placeholder="Телефон">
                        <label for="tel">Телефон</label>
                    </div>
                    
                <?}?>

             <?}?>
            
            <input type="submit" class="btn mb-3 btn-orange col-12" value="<?=$arParams['SUBMIT_NAME']?>">
            <div class="custom-control custom-checkbox mt-lg-3">
                <input type="checkbox" name="policy" class="custom-control-input" id="policy_<?=$arParams['FORM_ID']?>" checked>
                <label class="custom-control-label" for="policy_<?=$arParams['FORM_ID']?>">
                    <b>Согласен с обработкой<br>персональных данных</b>
                </label>
            </div>
        </form>
    