<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section id="catalog">
        <div class="container px-0 pb-5">
            <div class="h1 text-center"><b>Производим</b> <span class="c_orange">быстровозводимые здания</span><br> готовые к эксплуатации</div>
            <div class="catalog">
                <?if ($arResult['IBLOCK_WITH_SECTIONS']) {?>
                    
                    <?foreach ($arResult['IBLOCK_WITH_SECTIONS'] as $key => $iBlSections) {?>
                        
                        <?$goodClass = '';?>
                       
                        <?if($iBlSections['COUNT_SECTIONS'] ==0) {
                            $goodClass = 'good-mini';
                        }?>

                        <div class="good_wrapper col-12 col-sm-6 col-lg-4 px-1">
                            <div class="good <?=$goodClass?>">
                                <p class="title mb-0"><?=$iBlSections['META']['NAME']?></p>

                                <?if ($iBlSections['OFFSET_NAV_LIST']) {?>
                                    <!-- TODO - OFFSET_NAV_LIST -->
                                    <ul class="d-none d-lg-flex justify-content-center pl-0 top_list mb-0">
                                        <li><a href>На шасси</a></li>
                                        <li><a href>На санях</a></li>
                                        <li><a href>На раме</a></li>
                                        <li><a href>Транспаки</a></li>
                                    </ul>

                                <?}?>

                                <hr class="decor">
                                 
                                <?if ($iBlSections['SECTIONS_LIST']) {?>
                                    <ul class="second_list pl-1">
                                         <?foreach ($iBlSections['SECTIONS_LIST'] as $skey => $arSection) {?>
                                            <li><a href="<?=$iBlSections['META']['FOLDER'].$arSection['CODE']?>/"><?=$arSection['NAME']?></a></li>
                                        <?}?>
                                    </ul>
                                <?}?>

                                <a class="img d-block" href="<?=$iBlSections['META']['FOLDER']?>">
                                    <img src="<?=$iBlSections['META']['THUMB_PATH']?>" alt class="img-fluid"/>
                                </a>

                                <a href="<?=$iBlSections['META']['FOLDER']?>" class="btn btn-orange">Узнать подробнее</a>

                            </div>
                        </div>        

                        <?}?>
                    
                    <?}?>
            </div>
        </div>
</section>