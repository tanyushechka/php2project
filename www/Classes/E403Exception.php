<?php
namespace App\Classes;

class E403Exception extends EException
{
    protected $code = 403;
    protected $message = 'ACCESS IS DENIED';
}