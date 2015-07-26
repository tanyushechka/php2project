<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Main page</title>
    <link type="text/css" rel="stylesheet" href="/style.css"/>
</head>
<body>
<div id="wrapper">
    <a href="/show/blog/">to blog</a><br>
    <a href="/show/polaroid/">to polaroid</a><br>
    <div class="form">
        <form action="/show/specific/" method="post"
              enctype="multipart/form-data" name="uploadform">
            <span> search by id: </span>
            <input type="search" id="search" name="id" value=""><input type="submit">
        </form>
        <br><a href="/auth/exit/">exit</a><br>
        <?php if ('admin' == \App\Classes\Application::getCurrentByKey('role')) : ?>
        <br><a href="/admin/log_request/">Просмотр логов</a><br>
        <?php endif; ?>
        <h1>Страница новостей</h1>
        <a href="/edit/editing/">Добавить новость</a>
        <br><br>
        <ul>
            <?php
            foreach ($items as $item) : ?>
                <li>
                    <a href="/show/specific/<?php echo $item->getStuffId(); ?>"
                        ><?php echo $item->title; ?></a>
                    <br><br>***<br>
                </li>
            <?php endforeach; ?>
        </ul>
        <copyright></copyright>
    </div>
</div>
</body>
</html>

