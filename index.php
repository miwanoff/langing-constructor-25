<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Landing-page constructor</title>
    <style>
    input {
        display: block;
        padding: 5px;
        width: 200px;
    }


    a {
        display: block;
        padding: 5px;
        margin-top: 8px;
        background: lightgray;
        text-decoration: none;
        width: 160px;
        text-align: center;
    }


    #editor {
        border: solid grey;
        height: 200px;
    }


    .design {
        padding: 5px 20px;
        text-decoration: none;
        cursor: pointer;
        background: #deefff;


        border: 1px solid #008;
        font: 12px/1 Arial, sans-serif;
        color: #2c539e;
    }


    .file_upload {
        position: relative;
        overflow: hidden;
        font-size: 1em;
        height: 2em;
        line-height: 2em
    }


    .file_upload>input[type="button"] {
        /*height: 100%*/
    }


    .file_upload>div {
        padding-left: 1em
    }


    .file_upload input[type=file] {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: scale(20);
        letter-spacing: 10em;
        -ms-transform: scale(20);
        opacity: 0;
        cursor: pointer
    }
    </style>

</head>

<body>
    <form enctype="multipart/form-data" action="controller/controller.php" method="post">
        <h2>Landing-page constructor</h2>
        <h3>Title сторінки*</h3>
        <input type="input" name="title" value="" placeholder="Уведіть title сторінки" class="design" required />
        <h3>Заголовок сторінки *</h3>
        <input type="input" name="header" value="" placeholder=" Уведіть заголовок сторінки " class="design" required />
        <h3>Логотип</h3>
        <input type="file" name="logo" value="" placeholder="Введіть зображення логотипу" class="design" />
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <div id="message"></div>
        <h3>Форма</h3>
        <input type="input" name="form" value="" placeholder="Введіть назву кнопки" class="design" />
        <h3>Текст сторінки*</h3>
        <textarea name="text" value="" placeholder=" Уведіть текст сторінки " class="design" required></textarea>
        <h3>Генерація</h3>
        <input type="submit" name="submitB" value="Сгенерувати Landing" class="design" id="ok" />
        <h3>Результат</h3>
        <a href='landing/index.html' class="design" target="_blank"> Переглянути результат у новому вікні </a>
    </form>
    <iframe width="800" height="400" src="landing/index.html"></iframe>
    <p>* поля, обов'язкові до заповнення </p>
    <a href='landing.zip' class="design" download>Скачать результат</a>
</body>

</html>
