<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/style.css"/>

</head>
<body>
<div id="wrapper">
    <h1><?php echo 'THIS IS AUTHENTICATION!'; ?></h1>
    <br><br>
    <form id="formauthor" action="/auth/authentication/" method="post">
        <fieldset>
            <legend><strong>ВСЕ поля д. б. заполнены!</strong></legend>
            <?php if (isset($_SESSION['notice'])) : ?>
                <label id="error"><?php echo $_SESSION['notice'];
                    unset ($_SESSION['notice']); ?>
                </label><br><br>
            <?php endif; ?>
            <label>
                login:&nbsp;<input type="text" name="username" value="<?php echo $_COOKIE['lastuser']; ?>"/><br><br>
            </label>
            <label>
                password:&nbsp;<input type="password" name="password"/><br><br>
            </label>
            <input type="submit" value="save"/><br><br>
            <input type="reset" value="reset"/><br><br>
            <?php if (!empty($_COOKIE['lastdate'])) : ?>
                <label>Последний раз Вы заходили <?php echo date('d.m.Y H:i:s', $_COOKIE['lastdate']); ?></label>
            <?php endif; ?>
        </fieldset>
    </form>
    <br><br>
    <br><br>
    <copyright></copyright>
</div>
</body>
</html>