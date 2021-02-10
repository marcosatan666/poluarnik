<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <section id="reviews">
        <div class="wrap">
            <div class="container">
                <div class="h1 text-center mb-lg-5"><b>Отзывы клиентов</b><br>лучший показатель качества</div>
                <div class="row pt-4">
                    <div class="col-lg-8">
                        <div class="j-sliderReviews">
                            <? if($arResult['ITEMS_LIST']){?>
                                <?foreach ($arResult['ITEMS_LIST'] as $key => $arReview) {?>

                                <div>
                                    <div class="cli_name mb-4">
                                        <?=$arReview['NAME']?>
                                    </div>
                                    <div class="review-body">
                                        <div class="date"><?=$arReview['DATE_ACTIVE_FROM']?></div>
                                        <?=$arReview['PREVIEW_TEXT']?>
                                    </div>
                                </div>

                                <?}?>

                            <?}?>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                                
                            <?foreach ($arResult['ITEMS_LIST'] as $key => $arReview) {
                                    
						
                            $arDocPic = CFile::ResizeImageGet(
                                $arReview['PREVIEW_PICTURE'],
                                array("width" => 320, "height" => 450),
                                BX_RESIZE_IMAGE_EXACT,
                                true
                            );
                            
                            $cssClass = '';
                            if($key > 0) {

                                $cssClass = 'd-none';
                            }
                            
                            ?>

                            <a href="<?=CFile::GetPath($arReview['PREVIEW_PICTURE'])?>" class="j-fancy <?=$cssClass?>" data-fancybox="reviews">
                                <img src="<?=$arDocPic['src']?>" alt class="d-block float-right">
                            </a>
                            
                            <?}?>

                      
                    </div>

                </div>
            </div>
        </div>
    </section>
<?//TODO переместить в файл стилей?>
<style>
@media (min-width: 992px){
        #reviews .j-fancy {
        animation: .5s slowShow;
    }
}

@keyframes slowShow {
    from {
        opacity: 0;
        transform: scale(.8)
    }
    to {
        opacity: 1;
        transform: scale(1)
    }
}
</style>