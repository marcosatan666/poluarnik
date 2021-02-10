<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule("iblock");

class SimpleReviewsComponent extends CBitrixComponent
{       


    public function executeComponent()
    {   

    
        $arSelect = Array();
        $arFilter = Array("IBLOCK_ID"=>$this->arParams['REVIEWS_BLOCK'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>$this->arParams['ON_PAGE']), $arSelect);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            //$arProps = $ob->GetProperties();
            // echo "<pre>";
            // print_r($arFields);
            // echo "</pre>";

            $this->arResult['ITEMS_LIST'][] = $arFields;    


        }

        $this->includeComponentTemplate();

    }

}
