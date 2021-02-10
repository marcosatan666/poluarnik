<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cardCssClass = 'col-6 col-md-3 col-lg step';
if($arParams['CARD_CSS']){

    $cardCssClass = $arParams['CARD_CSS'];

}

?>
<section id="full-cycle">
    <div class="container pb-lg-5">
        <div class="h1 text-center my-5"><?=html_entity_decode($arParams['HEAD_TITLE'])?></div>
        <div class="row steps">

            <?foreach ($arResult['ITEMS'] as $key => $arItem) {
                $number = $key+1; 
                ?>
                <div class="<?=$cardCssClass?>">
                    <div class="num">0<?=$number?>.</div>
                    <div class="dash-wrap">
                        <i class="icon icon-step<?=$number?>"></i>
                    </div>
                    <p><?=$arItem['NAME']?></p>
                </div>    
            <?}?>

        </div>
    </div>
</section>
