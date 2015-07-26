<?php
namespace App\Classes;

class EException extends \Exception
{
    public $path = '/exceptions/';
    public $view;
    protected $info = [];

    public function __construct($info)
    {
        parent::__construct();
        $this->view = new View();
        $this->info = $info;
    }

    public function getInfo() {
        return $this->info;
    }

    public function getEMessage()
    {
        return $this->message;
    }

    public function getECode()
    {
        return $this->code;
    }

}