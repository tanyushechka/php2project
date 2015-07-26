<?php
namespace App\Controllers;
use App\Models\Stuff, App\Classes\Application, App\Classes\Logger;

session_start();

class Edit
    extends AbstractController
{
    public function actionSave()
    {
        if (true == array_search('', $_POST)) {
            $logger = new Logger();
            $logger->notice('empty field exists!', ['code' => 101, 'method' => __METHOD__, 'info' => $_POST]);
            $_SESSION['notice'] = 'empty field exists!';
            header('Location: /edit/editing');
        } else {
            $stuff = new Stuff();
            foreach ($_POST as $k => $v) {
                $stuff->$k = $v;
            }
            if (Application::getCurrentByKey('pageid')) {
                $stuff->update();
            } else {
                $stuff->insert();
            }
            header('Location: /');
        }
    }


    public function actionDelete()
    {
        if (isset($_SESSION['pageid']) && !empty($_SESSION['pageid'])) {
            Stuff::findOne($_SESSION['pageid'])->delete();
        }
        header('Location: /');
    }


    public function actionEditing()
    {
        if (Application::getCurrentByKey('pageid')) {
            $condWhere['id'] = Application::getCurrentByKey('pageid');
            if ('operator' == Application::getCurrentByKey('role')) {
                $condWhere['author'] = Application::getCurrentByKey('username');
            }
            $this->view->items = Stuff::findByCondition($condWhere)[0];
        }
        $this->view->display($this->path . 'editing.php');
    }
}