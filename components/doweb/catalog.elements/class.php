<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use \Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;

CModule::IncludeModule("iblock");
use CIBlockElement as CBEL;

class CatalogElementsComponent extends CBitrixComponent
{       


    public function getItemsList ($IBLOCK_ID, $IBLOCK_SECTION_ID =''){

        $arrIds = array();

        $arOrder = Array("ID"=>"ASC");
        $arSelect = array();
        $arFilter = array(
            "IBLOCK_ID"            => $IBLOCK_ID,
            "IBLOCK_SECTION_ID" => $IBLOCK_SECTION_ID

        );

        $res = CBEL::GetList($arOrder, $arFilter, false, array("nPageSize" => 50000), $arSelect);
        
        while ($ob = $res->GetNextElement()) {
            
            $arFields = $ob->GetFields();
            $arProps  = $ob->GetProperties();
            
            $arIamgeFile = CFile::GetFileArray($arFields['PREVIEW_PICTURE']);
            $arFields['IMAGE_FILE'] = $arIamgeFile;

            $arAdditionalProps = [];

        
            foreach ($arProps as $key => $value) {
                
                if($value['CODE'] =='PHOTOS' || $value['CODE'] =='GALERY'){

                    $arGalery = [];

                    foreach ($value['VALUE'] as $photoKey => $image_id) {
                        
                        $arGalIamgeFile = CFile::GetFileArray($image_id);
                        $arGalery[] = $arGalIamgeFile['SRC'];
                     
                    }

                    $arFields['GALERY'] = $arGalery;

                } else {

                    $arAdditionalProps[] = $value;

                }

                if($value['CODE'] =='PRICE_FROM'){

                    $arFields['PRICE'] = $value['VALUE'];
                    unset($arProps[$key]);
            
                }

            }

            $arFields['PROPERTYS'] = $arProps;
            $arFields['SHOWED_PROPS'] = $arAdditionalProps;

            $arrIds[] = $arFields;
        }

        return $arrIds;

    }


    public function showAjaxElement ($el_id)
    {

        $arElement = array();

        $arOrder = Array("ID"=>"ASC");
        $arSelect = array();
        $arFilter = array(
            "IBLOCK_ID"            => 10,
            "=ID" =>$el_id

        );
        
        $res = CBEL::GetList($arOrder, $arFilter, false, array("nPageSize" => 1), $arSelect);
        
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arProps  = $ob->GetProperties();

            $arFields['PROPERTYS'] = $arProps;

            $arElement = $arFields;
        }


        $html = '<div class="popup" id="popup1">
                <div class="head flex">
                    <p class="title"><strong><big>'.$arElement['NAME'].'</big></strong></p>
                </div>
                <div class="row mx-0 p-4">
                    <div class="col">
                        <div class="main_img">
                            <a href="https://polyarnik.com/vagon-doma/wp-content/uploads/2019/08/11.jpg" data-fancybox="product_popup" class="d-block">
                                <img src="https://polyarnik.com/vagon-doma/wp-content/uploads/2019/08/11.jpg" class="img-fluid" />
                            </a>
                        </div>
                       
                        <div class="contols">
                            <p>Утепление:</p>
                            <ul>
                                <li data-id="100" class="active" style="cursor: initial !important;">100 мм</li>
                                <li data-id="150" class="active" style="cursor: initial !important;">150 мм</li>
                                <li data-id="150" class="active" style="cursor: initial !important;">200 мм</li>
                            </ul>
                        </div>
                       
                        <table class="description_table">
                            <tbody>
                                <tr>
                                    <td><strong>Внешние размеры</strong></td>
                                    <td>длина 8 метров; ширина 2,5 метра</td>
                                </tr>
                                <tr>
                                    <td><strong>Каркас металлический</strong></td>
                                    <td>Цельносварной, усиленный, из специальных профилей 3 мм. Без мостов холода.</td>
                                </tr>
                                <tr>
                                    <td><strong>Утепление </strong></td>
                                    <td><strong>Северное -50С/+45С</strong>
                                        <p></p>
                                        <p>Минеральная вата 100/150/200 мм. Не горит.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Пол</strong></td>
                                    <td>Фанера ФСФ -21 мм. Линолеум полукоммерческий. Плинтуса.</td>
                                </tr>
                                <tr>
                                    <td><strong>Внутренняя отделка</strong></td>
                                    <td>ЛДСП 16 мм. Стены — древесный декор. Потолок – белый.</td>
                                </tr>
                                <tr>
                                    <td><strong>Внешняя отделка</strong></td>
                                    <td>Профлист металл 0,5 мм. / Металл вваренный в каркас 1 мм. / Сэндвич панель металл 0,7мм.</td>
                                </tr>
                                <tr>
                                    <td><strong>Электрика</strong></td>
                                    <td>Полный комплект. LED освещение.</td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                  
                    <div class="col">
                        <ul class="scroll_list pl-4">
                            <li>Дверь входная изотермическая 800х2000 <span>1 шт.</span></li>
                            <li>Окно ПВХ 740х1020 Поворотно-откидное, с москитной сеткой <span>3 шт.</span></li>
                            <li>Кровать двухъярусная, мягкая, с рундуком 750х2000 <span>4 шт.</span></li>
                            <li>Шкаф прикроватный 400х600х1800 ЛДСП <span>4 шт.</span></li>
                            <li>Стол прикроватный 600х800 <span>2 шт.</span></li>
                            <li>Эл. Конвектор настенный 1,5 кВт 400х595 <span>3 шт.</span></li>
                            <li>Перегородка 70мм ЛДСП с дверью купе МДФ <span>2 шт.</span></li>
                            <li>Тамбур с дверью МДФ 800х2000 <span>1 шт.</span></li>
                            <li>Эл. Конвектор настенный 1 кВт 400х460 <span>1 шт.</span></li>
                            <li>Стол обеденный 1000х600 ЛДСП <span>1 шт.</span></li>
                            <li>Табурет 350х350 ЛДСП <span>4 шт.</span></li>
                            <li>Шкаф для одежды сушильный, встроенный <span>1 шт.</span></li>
                            <li>Мойка с тумбой и водонагревателем 20л «Мойдодыр» 500х600 <span>1 шт.</span></li>
                            <li>Патрубок вывода канализации <span>1 шт.</span></li>
                            <li>Вешалка с крючками и полкой <span>1 шт.</span></li>
                            <li>Щит управления <span>1 шт.</span></li>
                            <li>Вентиляционный анемостат <span>3 шт.</span></li>
                            <li>Пожарный оповещатель <span>3 шт.</span></li>
                        </ul>
                        <div class="pl-4">
                            <a class="phone flex aic hidden " href="tel:+7 (3952) 78-22-05">
                                <img src="https://polyarnik.com/vagon-doma/wp-content/themes/polyarnik/assets/img/phone.png" style="margin-right: 15px;"> +7 [3952] 78-22-05 
                            </a>
        
                            <button class="btn j-show-modal mb-3 btn-orange ml-4" data-form="formRecall">Получить на почту</button>
        
                        </div>
                    </div>
                   
                </div>
               
            </div>';


        return $html;
        


    }
   

    public function executeComponent()
    {   
                      
        $request = Application::getInstance()->getContext()->getRequest();
        $action = $request->get('action');

        switch ($action) {
        
            case 'show_ajax':

                $el_id = $request->get('fast_view');
               
                $result['html'] = $this->showAjaxElement ($el_id);

                header('Content-type: application/json');
                echo json_encode($result);
                exit;

            break;   


        }



        // if (file_exists($path)) {
        //     return include $path;
        // } else {
        //     throw new Exception('Файл с меню не найден');
        //     return array();
        // }

        $arItems = $this->getItemsList ($this->arParams['IBLOCK_ID'], $this->arParams['IBLOCK_SECTION_ID']);

        $arPropsNames = [];

        foreach ($arItems as $key => $value) {

                foreach ($value['PROPERTYS'] as $keyProp => $arProp) {
                        
                      
                    if($keyProp !=='GALERY' && $keyProp !=='PHOTOS' && $keyProp !=='STATIC_CONTENT_FILE') {

                      

                        $arPropsNames[$keyProp] = $arProp['NAME'];

                        

                    } else {
                    
                        // echo "<pre>";
                        // print_r($value['PROPERTYS'][$keyProp]);
                        // echo "</pre>";

                        // echo $value['PROPERTYS'][$keyProp];
                        // unset($value['PROPERTYS'][$keyProp]);
                    }

                }

        }


          

       
      
        $this->arResult['PROPERTY_NAMES'] = array_unique($arPropsNames);
        $this->arResult['ELEMENTS'] = $arItems;
        
        // var_dump(\Bitrix\Iblock\Iblock::wakeUp($this->arParams['IBLOCK_ID'])->getEntityDataClass());

        $this->includeComponentTemplate();

    }

}
