<?php
namespace App\Controllers;
use App\Classes\Application, App\Classes\E404Exception, App\Classes\Logger;
use App\Models\User;

session_start();

class Auth
    extends AbstractController
{
    protected $path = '/authentication/';
    public function actionLogin()
    {
        $this->view->display($this->path . 'login.php');
    }


    public function actionAuthentication()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            try {
                $condition =[];
                $condition['username'] = $_POST['username'];
                $condition['password'] = $_POST['password'];
                $condition['status'] = 1;
                $user = User::findByCondition($condition)[0];
                Application::setCurrentByKey(['username' => $user->getUsername(), 'role' => $user->getUserRole()]);
                $logger = new Logger();
                $logger->info('SUCCESSFUL LOGIN', ['code' => 100, 'info' => $condition]);
                setcookie('lastuser', $user->getUserName(), (time() + 86400), '/');
                setcookie('lastdate', time(), (time() + 86400), '/');
                header('Location: /');
            } catch (E404Exception $e) {
                Application::catchException($e);
        }} else {
            $logger = new Logger();
            $logger->notice('empty field exists!', ['code' => 101, 'info' => $_POST]);
            $_SESSION['notice'] = 'empty field exists!';
            header('Location: /auth/login');
        }
    }


    public function actionExit()
    {
        session_destroy();
        unset($_SESSION);
        header('Location: /');
    }
}