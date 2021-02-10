<?
use Bitrix\Main\Diag\Debug;
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
?>
<section id="s05">
        <div class="container wrap">
            <div class="h1"><strong>КАТАЛОГ УКОМПЛЕКТОВАННЫХ</strong> <br> ВАГОН-ДОМОВ</div>




            <div class="row mx-0 catalog">

                       
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list", 
					"filter_vagon", Array(
					"COMPONENT_TEMPLATE" => "filter_vagon",
						"IBLOCK_TYPE" => "catalog", // Тип инфоблока
						"IBLOCK_ID" => "10",    // Инфоблок
						"SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
						"SECTION_CODE" => "",   // Код раздела
						"COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",    // Показывать количество
						"TOP_DEPTH" => "2", // Максимальная отображаемая глубина разделов
						"SECTION_FIELDS" => array(  // Поля разделов
							0 => "ID",
							1 => "",
						),
						"SECTION_USER_FIELDS" => array( // Свойства разделов
							0 => "",
							1 => "",
						),
						"FILTER_NAME" => "sectionsFilter",  // Имя массива со значениями фильтра разделов
						"VIEW_MODE" => "LINE",  // Вид списка подразделов
						"SHOW_PARENT_NAME" => "Y",  // Показывать название раздела
						"SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
						"CACHE_TYPE" => "A",    // Тип кеширования
						"CACHE_TIME" => "36000000", // Время кеширования (сек.)
						"CACHE_GROUPS" => "Y",  // Учитывать права доступа
						"CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
						"ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
					),
					false
				);?>


					<main class="col-lg-10">

					<?  
						$SECTION_ID = 3;
						$START_PAGE = 1;
						$ON_PAGE_COUNT = 6;

					?>

					<?if($request->isAjaxRequest()) {
						$APPLICATION->RestartBuffer();
						
						//prepare params
						$strfilter = $request->get('filter');
					
						$SECTION_ID = $request->get('section_id'); 
						$START_PAGE = $request->get('start_from');

						$arFilter = explode(',', $strfilter);
						$FILTER_CHECKED = $arFilter;

						$GLOBALS['arrFilter'] = array(
							"ACTIVE" => 'Y',
							"IBLOCK_SECTION_ID"=> $SECTION_ID
							
						);

						
						if(count($FILTER_CHECKED) > 0) {
							foreach ($FILTER_CHECKED as $key => $prop_id) {
								array_push($GLOBALS['arrFilter'], array("PROPERTY_".$prop_id."_VALUE"=> 'Y'));
							}
						
						}

					}?>

					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.section", 
						"goods", 
						Array(
						"COMPONENT_TEMPLATE" => ".default",
							
							"START_PAGE" =>	$START_PAGE,
							"ON_PAGE_COUNT" =>	$ON_PAGE_COUNT,
							"FILTER_CHECKED" => $FILTER_CHECKED,
							"SECTION_ID" => $SECTION_ID,	// ID раздела
					
						
							"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
							"IBLOCK_ID" => "10",	// Инфоблок
							
							"SECTION_CODE" => "",	// Код раздела
							"SECTION_USER_FIELDS" => array(	// Свойства раздела
								0 => "",
								1 => "",
							),
							"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
							"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
							"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
							"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
							"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
							"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
							"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
							"PAGE_ELEMENT_COUNT" => "100",	// Количество элементов на странице
							"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
							"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
							"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
							"TEMPLATE_THEME" => "blue",	// Цветовая тема
							"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
							"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
							"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
							"SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
							"SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
							"SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
							"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
							"LABEL_PROP" => "",	// Свойства меток товара
							"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
							"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
							"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
							"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
							"RCM_TYPE" => "personal",	// Тип рекомендации
							"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],	// Параметр ID продукта (для товарных рекомендаций)
							"SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
							"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
							"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
							"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
							"SEF_MODE" => "N",	// Включить поддержку ЧПУ
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_GROUPS" => "Y",	// Учитывать права доступа
							"SET_TITLE" => "N",	// Устанавливать заголовок страницы
							"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
							"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
							"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
							"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
							"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
							"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
							"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
							"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
							"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
							"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
							"PRICE_CODE" => "",	// Тип цены
							"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
							"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
							"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
							"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
							"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
							"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
							"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
							"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
							"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
							"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
							"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
							"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
							"PAGER_TITLE" => "Товары",	// Название категорий
							"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
							"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
							"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
							"LAZY_LOAD" => "N",	// Показать кнопку ленивой загрузки Lazy Load
							"LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
							"SET_STATUS_404" => "N",	// Устанавливать статус 404
							"SHOW_404" => "N",	// Показ специальной страницы
							"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
							"DISABLE_INIT_JS_IN_COMPONENT" => "Y",	// Не подключать js-библиотеки в компоненте
						),
						false
					);?>

					<?if($request->isAjaxRequest()) {
					
						die();

					};?>

						

					</main>

            </div> <!-- catalog -->
        </div>
</section>


