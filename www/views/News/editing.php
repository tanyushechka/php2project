<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Main page</title>
    <script src="/ckeditor/ckeditor.js"></script>
    <link type="text/css" rel="stylesheet" href="/style.css"/>
</head>
<body>

<div id="wrapper">

    <div class="form">
        <h1>Редактировать новость</h1>

        <form action="/edit/save/" method="post"
              enctype="multipart/form-data" name="uploadform">
            <label for="author">автор</label><br>
            <textarea id="author" name="author"><?php echo $items->author; ?></textarea><br><br>
            <label for="title">название</label><br>
            <textarea id="title" name="title"><?php echo $items->title; ?></textarea><br><br>
            <label for="text">текст</label><br>
            <textarea id="text" name="text">
                <?php echo $items->text; ?>
            </textarea><br><br>
            <input type="submit" value="Сохранить"/>
            <br><br>
            <br><br>
            <a href="/">на главную</a>
            <br><br>
        </form>
        <br><br>
        <copyright>
    </div>
</div>

</body>
</html>
