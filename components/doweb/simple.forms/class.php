<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\Loader::includeModule("iblock");
use Bitrix\Main\Page\Asset;

class SimpleFormsComponent extends CBitrixComponent
{       

    public $compPath = "/local/components/doweb/simple.forms/";

    public function addScripts()
    {   

        $arrScripts = array('form.validate.js','jquery.maskedinput.js', 'init.js');
        $arrCss = array('style.css');

        foreach ($arrScripts as $key => $script) {

            Asset::getInstance()->addJs($this->compPath."js/" . $script, false);
        }

        foreach ($arrCss as $key => $style) {

            Asset::getInstance()->addCss($this->compPath."css/" . $style, false);

        }

    }

    public function executeComponent()
    {   

        $this->addScripts();
        $this->includeComponentTemplate();

    }

}
