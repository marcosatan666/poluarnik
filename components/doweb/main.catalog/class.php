<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule("iblock");

class MainCatalogComponent extends CBitrixComponent
{       

    public  function _getElementBlocks($IBLOCK_ID)
    {
        $arItems = array();

        $rs = \Bitrix\Iblock\ElementTable::getList([

            'select' => [
                'ID',
                'IBLOCK_ID',
                'NAME'
            ],
            'filter' => [
                'IBLOCK_ID' => $IBLOCK_ID,
            ]

        ]);

        while($r = $rs->fetch())
        {
            $arItems[] = $r;
        }

        return $arItems;
    }

    public function _getSections($iBlock_id)
    {
        $arSections = array();

        $rs = \Bitrix\Iblock\SectionTable::getList([

            'select' => ['*'],
            'filter' => [
                'IBLOCK_ID' => $iBlock_id,
                '!=ID' =>array(50) //TODO вынести в правметры скрытые разделы
            ]

        ]);

        while($r = $rs->fetch())
        {
            $arSections[] = $r;
        }
        

        return $arSections;
    }


    public function getBlocksList (){

        $arrBlocks = $this->arParams['IBLOCK_IDS'];

        $arTree = array();
        
        foreach ($arrBlocks as $IBLOCK_ID) {

            $iBlock = array();
            $iBlock['META'] = array(
                'NAME'=> $this->arParams['IBLOCK_HEADS'][$IBLOCK_ID],
                'THUMB_PATH'=> $this->arParams['IBLOCK_THUMBS_PATH'][$IBLOCK_ID],
                'FOLDER' =>'/'.$this->arParams['IBLOCK_FOLDERS'][$IBLOCK_ID].'/',
            );
            
            $arSectionList = $this->_getSections($IBLOCK_ID);
        
            $iBlock['COUNT_SECTIONS'] = count($arSectionList);

            $iBlock['SECTIONS_LIST'] =$arSectionList;

            $arTree[] =$iBlock;

        }  
        
        // echo "<pre>";
        // print_r($arTree);
        // echo "</pre>";

        return $arTree;


    }
    

    public function executeComponent()
    {   

        // echo "<pre>";
        // print_r( $this->getBlocksList ());
        // echo "</pre>";
        
        $this->arResult['IBLOCK_WITH_SECTIONS'] = $this->getBlocksList ();
       
       
        $this->includeComponentTemplate();

    }

}
