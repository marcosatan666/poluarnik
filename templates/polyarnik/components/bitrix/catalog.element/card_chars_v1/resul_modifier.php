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
// echo "<pre>";
// print_r($arResult);
// echo "</pre>";
?>


<section id="angary_tent_character">
    <div class="container">
        <div class="h1 text-center mb-5"><b>Основные характеристики</b><br/>тентовых ангаров</div>
      
        <div class="card-group angary_tent_comparison">

				<div class="card col-lg ">
					<div class="row shadow">
						<div class="col">
							<div class="card-body">
								<div class="card-title">
									<?=$arResult['NAME']?>
								</div>
								<hr class="decor">
								<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="" class="card-image">
							</div>
						</div>
						<div class="col">
							<ul class="list-group list-group-flush ">

								<?foreach ($arResult['PROPERTIES'] as $key => $value) {?>
									
									<li class="list-group-item">
										<div class="d-lg-none"><?=$value['NAME']?></div>
										<?=$value['NAME']?>
									</li>
									
								<?}?>

							</ul>	
						</div>
					
					</div>
					<div class="col-12 card-text">
							<?=$arResult['PREVIEW_TEXT'];?>
					</div>
				</div>
							

				<div class="card col-lg-4 d-none d-lg-block">
				
					<ul class="list-group list-group-flush px-0">
						<?foreach ($arResult['PROPERTIES'] as $key => $value) {?>
							<li class="list-group-item">
										<?=$value['VALUE']?>
							</li>			
						<?}?>
					</ul>

					<div class="card-footer">
						<div class="price py-4">Стоимость<br/> ...
							<br/>от <span class="price_val">18 000 ₽ м2</span>

						</div>
						<div class="text-center">
							<input type="button" class="btn mb-3 btn-orange" value="Запросить прайс">
						</div>
					</div>
				</div>


 
           

        </div> 
    </div> 
</section> 