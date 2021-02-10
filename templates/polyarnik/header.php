<?php
define('CURRENT_DIR', $APPLICATION->GetCurDir());
define('DIST_PATH', '/local/dist/');
$page_name ='def';
$arLevel =explode("/",CURRENT_DIR);

$arLevel = array_diff($arLevel, array(''));

if (CURRENT_DIR !=='/' && CURRENT_DIR !=='/prices/') {
    if(count($arLevel) <2){

        $page_name = str_replace('/', '', CURRENT_DIR);

    } else {

        $page_name = implode('.',$arLevel);

    }
   
}
if (CURRENT_DIR =='/') {
    $page_name = 'main';
}

if (ERROR_404 =='Y') {
    $page_name = '404';
}
?>
<?$arAditionalHeades = array(
    '/vagon-doma/index.php', 
    '/modulnie-zdaniya/index.php',
    '/angar/index.php',
    '/vachtovie/index.php'


);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?$APPLICATION->ShowTitle(); ?></title>
    <?$APPLICATION->ShowHead();?>
    <meta name="theme-color" content="#ffffff">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4285f4"> 
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
   
    <?

    $APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=461169bb-2038-4323-a9b1-869efa301866');
    
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/jquery.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/mobile-detect.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/slick.js');

 
   
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/jquery.lazyloadxt.extra.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/jquery.lazyloadxt.script.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/sticksy.min.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'libs/jquery.fancybox.js');



    $APPLICATION->AddHeadScript(DIST_PATH.'js/base.js');
    $APPLICATION->AddHeadScript(DIST_PATH.'js/'.$page_name.'.js');

    

    $APPLICATION->addHeadString('<link href="'.DIST_PATH.'css/'.$page_name.'.page.css"  type="text/css" rel="stylesheet" />',true);
    $APPLICATION->addHeadString('<link href="'.DIST_PATH.'css/fix.css"  type="text/css" rel="stylesheet" />',true);
   

    ?>
</head>
<? $cssPage = str_replace('.', "-", $page_name); ?>
<body class="<?=$cssPage?>-body">


    
<?$fixPath = '/local/templates/polyarnik/fix/';?>



    <?$APPLICATION->IncludeComponent(
        "olegpro:olegpro.csscompiler",
        "",
        array(
            "PATH" => $fixPath."scss/", // Путь к папке с файлами, которые нужно компилировать
            "FILES" => array( // Список файлов для компиляции
                0 => "angar.scss",
                1 => "modulnie-zdaniya.scss",
                2 => "vagon.scss",
                3 => "vacht.scss",
                4 => "pavs.scss",


            ),
            "PATH_CSS" => $fixPath."css/", // Путь к папке, куда складывать скомпилированный css
            "CLASS_HANDLER" => "\\Olegpro\\Csscompiler\\SCSSCompiler", // PHP класс-обработчик, наследуемый от класса \Olegpro\Csscompiler\Compiler(должен реализовывать метод toCss)
            "USE_SETADDITIONALCSS" => "Y", // Подключать скомпилированный css файл через CMain::SetAdditionalCSS()?
            "REMOVE_OLD_CSS_FILES" => "Y", // Удалять старые скомпилированные css файлы?
            "TARGET_FILE_MASK" => "_master-fix%s.css" // Маска файла для записи css файла. (%s обязателен, он заменится на таймштамп файла)
        ),
        false,
        array(
            "HIDE_ICONS" => "N"
        )
    );?>
 

<?$APPLICATION->ShowPanel();?>

        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/include/mobile-bar.php",
            array(),
            array(
                "MODE"     => "php",
                "NAME"     => "",
                "TEMPLATE" => "include_area.php",
            )
        );?>



        <?if(!in_array($_SERVER['REAL_FILE_PATH'], $arAditionalHeades)) {?>
            
         

            <div class="site-header <?=$cssPage?>-header py-4 py-md-2 py-xl-4">
                <div class="container">
                    
                    <?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . "/include/menu.php",
                        array(),
                        array(
                        "MODE"     => "php",
                        "NAME"     => "",
                        "TEMPLATE" => "include_area.php")
                    );
                    
                    if(CURRENT_DIR !=='/') {

                        $APPLICATION->IncludeComponent("bitrix:breadcrumb",".default",Array(
                            "START_FROM" => "0", 
                            "PATH" => "", 
                            "SITE_ID" => "s2" 
                            )
                        );

                    }

                    $pathHeadPart = SITE_TEMPLATE_PATH . "/include/blocks/".$page_name."_page.head-text.php";

                
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathHeadPart)) {

                        $pathHeadPart = $pathHeadPart;

                    } else {

                        $pathHeadPart  = $APPLICATION->GetCurDir() . "/inc/blocks/page.head-text.php";

                    }


                    $APPLICATION->IncludeFile(
                        $pathHeadPart,
                        array(),
                        array(
                            "MODE"     => "php",
                            "NAME"     => "",
                            "TEMPLATE" => "include_area.php",
                        )
                    );?>

                </div>
            </div>
        
        <?};?>

  


