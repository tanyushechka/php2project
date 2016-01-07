<?php
namespace App\Controllers;

use App\Classes\Application;
use App\Models\Stuff;

session_start();

class Show extends AbstractController


{
    protected $path =  '/news111/';

    public function actionAll()
    {
        $condWhere = [];
        if ('operator' == Application::getCurrentByKey('role')) {
            $condWhere['author'] = Application::getCurrentByKey('username');
        }
        $this->view->items = Stuff::findByCondition($condWhere, 'date');
        $this->view->display($this->path . 'all.php');
    }


    public function actionSpecific()
    {
        if (Application::getCurrentByKey('pageid')) {
            $condWhere['id'] = Application::getCurrentByKey('pageid');
            if ('operator' == Application::getCurrentByKey('role')) {
                $condWhere['author'] = Application::getCurrentByKey('username');
            }
            $this->view->items = Stuff::findByCondition($condWhere)[0];
            $this->view->display($this->path . 'specific.php');
        } else {
            header('Location: /');
        }
    }

    public function actionBlog()
    {
        $this->view->display($this->path . 'blog.php');
    }

    public function actionPolaroid()
    {
        $this->view->display($this->path . 'polaroid.html');
    }
}