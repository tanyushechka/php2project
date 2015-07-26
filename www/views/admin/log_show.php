<?php
use App\Classes\Application;

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Main page</title>
    <link type="text/css" rel="stylesheet" href="/style.css"/>
</head>
<body>
<div id="wrapper">
    <div id="log">
        <p><?php Application::fetchLogByTerm($logBegin, $logEnd); ?></p>
        <br><br>


        <a href="/">на главную</a>
        <br><br>
        <a href="/admin/log_request/">Просмотр логов</a>
        <br><br>
        <copyright></copyright>
    </div>
</div>
</body>
</html>