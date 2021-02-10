<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>

<section id="<?=$arParams['CSS_ID']?>">
    <div class="container">
        <div class="h1 text-center mb-5"><b>Основные характеристики</b><br/> <?=$arParams['BLOCK_HEAD_TITLE']?></div>
      
        <div class="card-group angary_tent_comparison">

				<div class="card col-lg ">
					<div class="row shadow">
						<div class="col-12 col-md">
							<div class="card-body">
								<div class="card-title">
									<?=$arResult['NAME']?>
								</div>
								<hr class="decor">
								<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="" class="card-image">
							</div>
						</div>
						<div class="col-12 col-md">
							<ul class="list-group list-group-flush ">

								<?foreach ($arResult['PROPERTIES'] as $key => $value) {?>
									
									<li class="list-group-item">
									
										<span class="d-none d-lg-inline"><?=$value['NAME']?></span>
										<div class="d-lg-none"><?=$value['NAME']?></div>
										<span class="d-lg-none">
												<?=$value['VALUE']?>
										</span>
									</li>
									
								<?}?>

							</ul>	
						</div>
					
					</div>
					<div class="d-none d-lg-block col-12 card-text">
							<?=$arResult['PREVIEW_TEXT'];?>
					</div>
				</div>
							
				<div class="card col-lg-4 d-lg-block">
				
					<ul class="list-group list-group-flush px-0 d-none d-lg-block">
						<?foreach ($arResult['PROPERTIES'] as $key => $value) {?>
							<li class="list-group-item">
										<?=$value['VALUE']?>
							</li>			
						<?}?>
					</ul>

					<div class="card-footer">
						<div class="price py-4">Стоимость<br/> ...
							<br/>от <span class="price_val"><?=$arResult['PRICE']?> ₽ м2</span>

						</div>
						<div class="text-center">
							<input type="button" class="btn mb-3 btn-orange j-show-modal" data-form="formRecall" value="Запросить прайс">
						</div>
					</div>
				</div>

        </div> 
    </div> 
</section> 