<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<section class="advantages" id="moduli_advantages">
    <div class="container">
        
        <div class="h1 text-center mb-5">
            <?=htmlspecialchars_decode($arParams['HEAD_DESCRIPTION'])?>
        </div>

        <div class="row  mb-3 ">
            <div class="col-lg-7 order-lg-2">
                <img alt="" class="img-fluid" src="<?=$arParams['CENTER_IMAGE_SRC']?>" />
            </div>
            <div class="col-lg-2 order-lg-1">

            <?  foreach ($arResult['ITEMS'] as $key => $value) {
                    if($key >= 0 && $key < 6){?>

                        <div class="fade-box mb-lg-5">
                            <span class="c_orange">
                                <i class="icon icon-play-right"></i>
                            </span><?=$value['PREVIEW_TEXT']?>
                        </div>

                    <?}
                   
                }
            ?>
            </div>

            <div class="col-lg-2 order-lg-3 text-right">

                <?  foreach ($arResult['ITEMS'] as $key => $value) {
                        if($key >= 6 && $key < 12){?>

                            <div class="fade-box mb-lg-5">
                                <span class="c_orange">
                                    <i class="icon icon-play-right"></i>
                                </span><?=$value['PREVIEW_TEXT']?>
                            </div>

                        <?}
                    
                    }
                ?>
                
            </div>
        </div>

        <div id="mobAdvSlider"></div>
        
        <div class="d-flex justify-content-center align-items-center d-lg-none">
            <button class="arrow-l" data-for="mobAdvSlider" data-to="mobAdvSlider">prev</button>
            <div class="j-numerator my-0 text-center" data-slider="mobAdvSlider">
                <span class="c_orange j-c_num">1</span><i class="px-1">/</i><span class="j-c_count">0</span>
            </div>
            <button class="arrow-r" data-for="mobAdvSlider" data-to="slickNext">next</button>
        </div>

    </div>
</section>
<style>

.advantages .fade-box {
    font-size: 12px;
    font-weight: 500;
    position: relative;
    min-width: 250px;
}

.advantages {
  
    padding-bottom: 0;
}

.advantages .h1  {
    font-size: 1.66rem;
    text-transform: uppercase;
}

#map .fly-box {
    position: absolute;
    left: 60.0%;
}

.container {


max-width: 1170px;

padding: 20px 5px;

}

.advantages img {
max-width: 732px;
position: relative;
top: 6.6rem;
}

.cost {

    background-position: center -5rem;

}

#slide_items, #delivery {
    background-color: #E3EFF7;}

    #slide_items {
  
  top: 0rem;}


.head-text .bold {
 
    font-size: 30px;
   
}    

.head-text .h1 {
    font-size: 54px;

}

#vagon_kp.moduli_kp {
    top: 0;
    margin-bottom: -17rem;
}


</style>

