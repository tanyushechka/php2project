<?php
namespace App\Classes;

class E405Exception extends EException
{
    protected $code = 405;
    protected $message = 'NON-UNLOADED CLASS';
}