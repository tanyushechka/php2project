<?php
use App\Classes\Application;
use App\Classes\E403Exception;
use App\Classes\E404Exception;
use App\Classes\E405Exception;

require __DIR__ . '/autoload.php';

session_start();

$json = file_get_contents(__DIR__ . '/config/config.json');
$config = json_decode($json);

/****************** parse url  ***************************************/

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$urlParts = explode('/', trim($urlPath, '/'));
$control = array_shift($urlParts);
$action = array_shift($urlParts);

/*********  check authentication and set/unset $_SESSION['id']  ***********/

if (!Application::getCurrentByKey('username') && ($action != 'authentication')) {
	$control = 'auth';
	$action = 'login';
} else {
	switch (true) {
	case !empty($urlParts):
		Application::setCurrentByKey(['pageid' => array_shift($urlParts)]);
		break;
	case !empty($_POST['id']):
		Application::setCurrentByKey(['pageid' => $_POST['id']]);
		break;
	case empty($control):
		Application::unsetCurrentByKey('pageid');
		break;
	default:
		break;
	}
}

/**************  call Controller's Method   ******************************/

$ctrl = (!empty($control)) ? $control : 'show';
$ctrlClassName = 'App\\Controllers\\' . ucfirst($ctrl);
$act = (!empty($action)) ? $action : 'all';
$method = 'action' . ucfirst($act);
var_dump('expression');

try {
	$controller = new $ctrlClassName();
	$controller->$method();
} catch (E403Exception $e) {
	Application::catchException($e);
} catch (E404Exception $e) {
	Application::catchException($e);
} catch (E405Exception $e) {
	Application::catchException($e);
}