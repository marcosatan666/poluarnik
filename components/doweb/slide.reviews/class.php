<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule("iblock");

class SimpleReviewsComponent extends CBitrixComponent
{       


    public function executeComponent()
    {   

        $this->includeComponentTemplate();

    }

}
