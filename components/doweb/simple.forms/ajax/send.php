<?
require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

use \Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;

$request = Application::getInstance()->getContext()->getRequest();
$action = $request->get('action');

$result['success'] = false;

switch ($action) {

    case 'chwcksession':

        $result['check_bitrix'] = check_bitrix_sessid();

    break;


    case 'send':
        
        $responseTemplate =
            '<div class="form_wrap" id="formSucsess">
                <div class="card popup col-12 ">
                    <div class="card-header text-center">
                        <div class="h1 text-center">#MESSAGE_STRING#</div>
                </div>
            </div>
        </div>';

        if (check_bitrix_sessid()) {

            try {

                $eventData =array(
                    "NAME" =>$request->get('fio'),
                    "MAIL" =>$request->get('email'),
                    "PHONE" =>$request->get('phone'),
                    "TOPIC" =>$request->get('topic'),

                );
                
                $cEvent = new \CEvent();
                $cEvent->Send('GLOBAL_FORM', SITE_ID, $eventData, "N", 10);

                Debug::writeToFile($eventData);

                $result['message'] = str_replace(
                    [
                        '#MESSAGE_STRING#',
                        '#MESSAGE_STATUS_CODE#',
                    ],
                    [
                        'Спасибо. Заявка принята!',
                        'popup-ok',
                    ],
                    $responseTemplate
                );

                $result['success'] = true;
              

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