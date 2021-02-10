<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="our-clients">
        <div class="container">
            <div class="h1 text-center mb-lg-5"><b>Наши</b> клиенты</div>
            <div class="j-sliderClients pt-3">
                <?foreach ($arResult['ITEMS'] as $key => $value) {?>
                    <img src="<?=$value['IMAGE_FILE']['SRC']?>" alt="" />
                <?}?>    
            </div>
        </div>
</section>




