<?
require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

use \Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;

$request = Application::getInstance()->getContext()->getRequest();
$action = $request->get('action');

$result['form_html'] = false;

switch ($action) {

    case 'show':
        
        $responseTemplate =
            '<div class="form_wrap" id="formSucsess">
                <div class="card popup col-12 ">
                    <div class="card-header text-center">
                        <div class="h1 text-center">#MESSAGE_STRING#</div>
                </div>
            </div>
        </div>';

        if ($request->get('form_id')) {

            try {

                $formTemplate = "";

                if($request->get('form_template')) {
                    $formTemplate = $request->get('form_template');
                }
                

                ob_start();

                $APPLICATION->IncludeComponent(
                    "doweb:simple.forms",
                    $formTemplate,
                    array(
                        "IS_AJAX" => 'Y',
                        "FORM_IBLOCK_ID" =>"",
                        "FORM_ID" =>$request->get('form_id'),
                        "TITLE" =>  "Заполните форму",
                        "DESC" =>   "",
                        "SUBMIT_NAME" => $request->get('btn_name'),
                        "TYPE" =>'INLINE_VERTICAL',
                        "FIELDS" => array(
                            "mail", "tel", "company","message"
                        )
                    ),
                    false
                );  

                echo json_encode($result);
                exit;
        
              

            } catch (Exception $e) {
                $result['message'] = str_replace(
                    [
                        '#MESSAGE_STRING#',
                        '#MESSAGE_STATUS_CODE#',
                    ],
                    [
                        $e->getMessage(),
                        'popup-error',
                    ],
                    $responseTemplate
                );
            }


            
        } else {
            $result['message'] = str_replace(
                [
                    '#MESSAGE_STRING#',
                    '#MESSAGE_STATUS_CODE#',
                ],
                [
                    'Ваша сессия истекла, обновите страницу и попробуйте ещё раз.',
                    'popup-error',
                ],
                $responseTemplate
            );
        }

        break;
}


header('Content-type: application/json');
echo json_encode($result);
exit;