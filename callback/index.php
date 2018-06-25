<?php 
include 'db.php';

if (!isset($_REQUEST)) {
  exit;
}


callback_handleEvent();



function callback_handleEvent() {
  $event = _callback_getEvent();

  try {
    switch ($event['type']) {
      //Подтверждение сервера
      case 'confirmation':
	  
        _callback_handleConfirmation($event['pid']);
        break;

      //Получение нового сообщения
      case 'finish':
        _callback_uploadAndDeploy($event['pid']);
        break;

      default:
        _callback_response('');
        break;
    }
  } catch (Exception $e) {
    log_error($e);
  }

  _callback_okResponse();
}




function _callback_getEvent() {
  return json_decode(file_get_contents('php://input'), true);
}


function _callback_handleConfirmation($pid) {
	//print ($pid);
  $updateStatus = mysql_query("UPDATE `procs` SET `status`='work' WHERE `pid`='$pid'");
}

function  _callback_uploadAndDeploy($pid) {

//
}

function _callback_okResponse() {
  _callback_response('');//ok
}

function _callback_response($data) {
  echo $data;
  exit();
}
























?>