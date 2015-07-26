<?php
namespace App\Classes;

class E404Exception extends EException
{
    protected $code = 404;
    protected $message = 'NOT FOUND';
}