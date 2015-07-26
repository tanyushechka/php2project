<?php
namespace App\Classes;

interface ILogger {
    public function logToJson($level, $message, $context);
}