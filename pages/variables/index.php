<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Переменные</title>
    <meta name="Description" content="Переменная – это ячейка памяти компьютера, в которой хранится информация." />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../../styles/style.css">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(72325039, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/72325039" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <a href="index.html" class="header_div">
        <img class="img_logo" src="../../img/python-logo.svg" alt="Учебник Python">
        <h1>Учебник Python</h1>
    </a>
    <div class="main_div">
        <?php
        require_once "../../menu.php";
        ?>
        <div class="content_div">
            <h2>Переменные</h2>
            <p>Что же такое <b>переменная</b>?</p>
            <p><i><b>Переменная</b> – это ячейка памяти компьютера, в которой хранится информация.</i></p>
            <p>Т.е. в <b>переменные</b> мы можем сохранять <b>числа, строки</b>, результаты вычислений и значения других типов данных. Имена переменных должны быть написаны латинскими буквами(на английском языке) и не должны начинаться с цифр и специальных
                символов.
            </p>
            <p>Например, создадим <b>переменную</b> и назовем ее <u>name</u>. Ее значением возьмем строку <u>“Andrew”</u>. Чтобы связать между собой <b>имя переменной</b> и ее <b>значение</b>, используют <b>оператор присваивания</b> – обозначается он знаком
                = (<b>равно</b>). Далее выведем значение этой <b>переменной</b>. Как это выглядит:</p>
            <div class="code">
                name = "Andrew"<br>print("Hello, " + name)
            </div>
            <p>Интерпретатор выведет имя <b>Andrew</b>.</p>
        </div>

    </div>
</body>

</html>