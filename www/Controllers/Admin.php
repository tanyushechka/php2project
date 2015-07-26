<?php
/**
 * Created by PhpStorm.
 * User: tagedo
 * Date: 02.05.2015
 * Time: 21:40
 */
namespace App\Controllers;

use App\Classes\Application, App\Classes\MyMailer;

class Admin
    extends AbstractController
{
    protected $path = '/admin/';

    public function actionLog_request()
    {
        $this->view->display($this->path . 'log_request.php');
    }


    public function actionLog()
    {
        $dateBegin = (!empty($_POST['dateBegin'])) ? $_POST['dateBegin'] : date('Y-m-d', time()).'T00:00';
        $dateEnd = (!empty($_POST['dateEnd'])) ? $_POST['dateEnd'] : date('Y-m-d\TH:i', time());
        echo $dateBegin.'<br>';
        echo $dateEnd.'<br>';
        $timestampBegin = Application::createTimestampFronInputDatelocal($dateBegin);
        $timestampEnd = Application::createTimestampFronInputDatelocal($dateEnd);
        $this->view->logBegin = date('ymdHis', $timestampBegin);
        $this->view->logEnd = date('ymdHis', $timestampEnd);
        $this->view->display($this->path . 'log_show.php');
    }


public function actionEmail() {
    $email = new MyMailer();
    $email->sendMail();
}
}