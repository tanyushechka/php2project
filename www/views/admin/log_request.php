<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin page</title>
    <link type="text/css" rel="stylesheet" href="/style.css"/>
</head>
<body>
<div id="wrapper">
    <div class="form">
        <h1>Страница администратора</h1>
        <h3>Просмотр логов</h3>
        <form action="/admin/log/" method="post"
              enctype="multipart/form-data" name="uploadform">
            <span> choose date begin: </span>
            <input type="datetime-local" id="requestLog" name="dateBegin" value=""><br>
            <span> choose date end: </span>
            <input type="datetime-local" id="requestLog" name="dateEnd" value="">
            <br><br>
            <p>
                <select size="5" multiple name="message[]">
                    <option value="ACCESS IS DENIED">ACCESS IS DENIED</option>
                    <option value="NOT FOUND">NOT FOUND</option>
                    <option value="SUCCESSFUL LOGIN">SUCCESSFUL LOGIN</option>
                    <option value="empty field exists!">EMPTY FIELD</option>
                    <option value="NON-UNLOADED CLASS">NON-UNLOADED CLASS</option>
                </select>
                <select size="5" multiple name="level[]">
                    <option value="emergency">emergency</option>
                    <option value="alert">alert</option>
                    <option value="critical">critical</option>
                    <option value="error">error</option>
                    <option value="warning">warning</option>
                    <option value="notice">notice</option>
                    <option value="info">info</option>
                    <option value="debug">debug</option>
                </select>
            </p>
            <br><br>
            <input type="submit">
        </form>
        <br><br> <br><br>
        <form action="/admin/email/" method="post" enctype="multipart/form-data" >
            <input  type="submit">
        </form>
        <br><a href="/auth/exit/">exit</a><br>


        <copyright></copyright>
    </div>
</div>
</body>
</html>
