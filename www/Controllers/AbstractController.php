<?php
namespace App\Controllers;
use App\Classes\Application;
use App\Classes\View, App\Classes\E403Exception;

abstract class  AbstractController
{
    protected $path;
    protected $view;
    public function __construct()
    {
        if (((static::class == 'App\Controllers\Edit') && (Application::getCurrentByKey('role') <> 'supervisor')) ||
         ((static::class == 'App\Controllers\Admin') && (Application::getCurrentByKey('role') <> 'admin'))) {
            throw new E403Exception(['class' => static::class, 'role' => Application::getCurrentByKey('role')]);
        }
        $this->view = new View();
    }
}