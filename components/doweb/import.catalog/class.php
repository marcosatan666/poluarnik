<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule("iblock");

class ImportCatalogComponent extends CBitrixComponent
{
    public $IBLOCK_ID = 10;

    private function creatProperty($prop)
    {

        $arFields = array(
            "NAME"             => $prop[0],
            "ACTIVE"           => "Y",
            "SORT"             => "1700",
            "CODE"             => "F_OTHER",
            "PROPERTY_TYPE"    => "S",
            "IBLOCK_ID"        => $this->IBLOCK_ID,
            "WITH_DESCRIPTION" => "Y",
            'FEATURES'         => [
                'iblock:DETAIL_PAGE_SHOW' => [
                    'IS_ENABLED' => 'Y',
                    'MODULE_ID'  => 'iblock',
                    'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
                ]],
        );

        $iblockproperty = new \Bitrix\Iblock\PropertyTable;
        $Property       = $iblockproperty->Add($arFields);

        return $Property->getId();

    }

    private function addElement($oItem, $arrProps = array())
    {
        $el                 = new \CIBlockElement;

       
        $rsSections = \CIBlockSection::GetList(Array("SORT"=>"­­ASC"), Array("IBLOCK_ID" => $this->IBLOCK_ID));

        $itemSectionID = 0;
        while ($arSection = $rsSections->Fetch())
        {   

            if($arSection['SORT'] ==$oItem->section){
                   
                    $itemSectionID = $arSection['ID'];


            }
           
        }
   

        
        $abs_path = $_SERVER["DOCUMENT_ROOT"];

       
        $arrImageFile = \CFile::MakeFileArray($oItem->imageSrc);
        $arLoadProductArray = array(

            "IBLOCK_SECTION_ID" => $itemSectionID,
            "IBLOCK_ID"         => $this->IBLOCK_ID, //
            "ACTIVE"            => "Y",
            "DETAIL_PICTURE"    => $arrImageFile,
            "PROPERTY_VALUES"   => $arrProps,
            "NAME"              => $oItem->name,
            "PREVIEW_TEXT"      => "",
            "DETAIL_TEXT"       => "",
        );

        $ITEM_ID = $el->Add($arLoadProductArray);

        return $ITEM_ID;
    }

    public function executeComponent()
    {

        if ($_REQUEST["import_elements"]) {

            $arrElements = json_decode($_REQUEST["import_elements"]);
            ob_start();
            foreach ($arrElements as $key => $value) {
                $oItem = json_decode($value);
                

                //свойства 
                $arrProps = array(); 
                foreach ($oItem->props as $g => $prop) {
                    $rsProperty = \Bitrix\Iblock\PropertyTable::getList(array(
                        'filter' => array('IBLOCK_ID' => $this->IBLOCK_ID, '=NAME' => $prop[0]),

                    ));
                  

                    $bxPropID = 0;
                    $isAdded = false;
                    while ($arProperty = $rsProperty->fetch()) {
                        $isAdded = true;
                        $bxPropID = $arProperty['ID'];
                    }

                    if ($isAdded === false) {
                        $bxPropID = $this->creatProperty($prop);
                    }
                    
                    $arrProps[$bxPropID] = $prop[1];
                   
                }

                //Добавление элемента
                echo $this->addElement($oItem, $arrProps);


            }

           
            $this->arResult['ANSWER'] = ob_get_clean();

        }

        $this->includeComponentTemplate();

    }

}
