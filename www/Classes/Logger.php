<?php
namespace App\Classes;
use Psr\Log\AbstractLogger;

class Logger
extends AbstractLogger
    implements ILogger

{
    public function logToJson($level, $message, $context)
    {
        $fileName = __DIR__ . '/../../logs/'.date('ymdHis', time());
        Application::createFile($fileName);
        $obj = new \stdClass();
        $obj->date = date('d.m.y H:i:s', time());
        $obj->level = $level;
        $obj->message = $message;
        $obj->context = $context;
        $json = json_encode($obj);
        file_put_contents($fileName, $json);
    }

    public function log($level, $message, array $context = array()) {
        self::logToJson($level, $message, $context);
    }


}