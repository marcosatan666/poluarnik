<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use CIBlockElement as CBEL;


class PageSectionsComponent extends CBitrixComponent
{     

    public function getItemsList ($IBLOCK_ID, $IBLOCK_SECTION_ID){

        $arItems = [];

        $arOrder = Array("ID"=>"ASC");
        $arSelect = array("ID", "PREVIEW_PICTURE", "NAME", "IBLOCK_SECTION_ID", "PREVIEW_TEXT");
        $arFilter = array(
            "ACTIVE"    => 'Y',//add 13/01/2021
            "IBLOCK_ID"            => $IBLOCK_ID,
            "IBLOCK_SECTION_ID"            => $IBLOCK_SECTION_ID,
        );

        $res = CBEL::GetList($arOrder, $arFilter, false, array("nPageSize" => 50000), $arSelect);
   
        while($arFields = $res->GetNext())
        {   
            $arIamgeFile = CFile::GetFileArray($arFields['PREVIEW_PICTURE']);
            $arFields['IMAGE_FILE'] = $arIamgeFile;
            $arItems[] = $arFields;
        }

        return $arItems;
    }




    public function executeComponent()
    {   

        if($this->arParams['INFO_LIST_ID']) {

            $arItems = $this->getItemsList ($this->arParams ['IBLOCK_ID'], $this->arParams ['INFO_LIST_ID']);
            $this->arResult['ITEMS'] = $arItems;
            $this->arResult['COUNT'] = count($arItems);

        }

        if($this->arParams['SLIDER_ID']) {

            $arSlides = $this->getItemsList ($this->arParams ['IBLOCK_ID'], $this->arParams ['SLIDER_ID']);
            $this->arResult['ITEMS'] = $arSlides;
            $this->arResult['COUNT'] = count($arSlides);

        }

        $this->includeComponentTemplate();

    }

}
