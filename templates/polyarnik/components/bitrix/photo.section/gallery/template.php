<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//TODO - переделать скролл

?>
 <section id="gallery">
        <div class="bg-wrap">
            <div class="container px-0">
                <div class="h1 text-center"><b>фото</b><br>выполненых работ</div>
              
                <div class="gallery d-flex">
               
                    <? $i = 1; ?>
                    <?foreach($arResult["ROWS"] as $arItems):?>
                         <?foreach($arItems as $arItem):?>
                            <?$i++;?>
                            <?if($i <=6):?>
                                <?if(is_array($arItem)):?>
                                    <? $file = CFile::ResizeImageGet($arItem['~PREVIEW_PICTURE'], array('width'=>250, 'height'=>190), BX_RESIZE_IMAGE_EXACT, true);?>
                                    <a href="<?=$arItem['PICTURE']['SRC']?>" data-fancybox="photo-gallery">
                                        <img  src="<?=$file['src']?>" data-src="<?=$file['src']?>" alt="">
                                    </a>
                                <?endif;?>
                            <?endif;?>
                            
                        <?endforeach?>
                    <?endforeach?>

                   
                    <? $i = 1; ?>
                    <?foreach($arResult["ROWS"] as $arItems):?>
                         <?foreach($arItems as $arItem):?>
                            <?$i++;?>
                            <?if($i >6):?>
                                <?if(is_array($arItem)):?>
                                    <? $file = CFile::ResizeImageGet($arItem['~PREVIEW_PICTURE'], array('width'=>250, 'height'=>190), BX_RESIZE_IMAGE_EXACT, true);?>
                                    <a href="<?=$arItem['PICTURE']['SRC']?>" data-fancybox="photo-gallery">
                                        <img  src="<?=$file['src']?>" data-src="<?=$file['src']?>" alt="">
                                    </a>
                                <?endif;?>
                            <?endif;?>
                            
                        <?endforeach?>
                    <?endforeach?>
                   
                </div>
         
                <button id="_showMore" class="d-block btn btn-orange pl-0">Показать еще <i class="icon icon-down"></i></button>
                <!-- <button id="scrollTop" class="d-none btn btn-orange pl-0">В начало <i class="icon icon-down"></i></button> -->
            </div>
        </div>
</section>

<style>

.gallery { 

    height: 482px; 
    overflow: hidden;
    -webkit-transition: height 1s; 
    -moz-transition: height 1s; 
    -ms-transition: height 1s; 
    -o-transition: height 1s; 
    transition: height 1s;  
   
    }

    .show_full {
    -webkit-transition: height 1s; 
    -moz-transition: height 1s; 
    -ms-transition: height 1s; 
    -o-transition: height 1s; 
    transition: height 1s;  
    height: auto;
}
    /* 

    
    .gallery::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.gallery::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.gallery::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); } */
</style>

<script>

$("#_showMore").on('click', ()=>{

$("#gallery div.gallery").animate({ height: 1000 }, 600);

})
// $("#_scrollMore").click(function(e) {
//     el = document.getElementById('scrollWrap');
//     el.style.height = '600px';
// });


</script>