<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Вывод данных</title>
    <meta name="Description" content="Для вывода данных в Python используется функция print()." />
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
    <a href="/" class="header_div">
        <img class="img_logo" src="../../img/python-logo.svg" alt="Учебник Python">
        <h1>Учебник Python</h1>
    </a>
    <div class="main_div">
        <?php
        require_once "../../menu.php";
        ?>
        <div class="content_div">
            <h2>Вывод данных</h2>
            <p>Для <b>вывода данных</b> в <b>Python</b> используется функция <b>print()</b>. В качестве аргумента в функции могут выступать <b>строки</b>, <b>числа</b> и другая информация различных
                <a href="types.html"><u><b>типов данных</b></u></a>.
            </p>
            <h3>Hello, world!</h3>
            <p>Напишем всеми известную первую программу начинающего программиста – <b>Hello, world!</b> Код:</p>
            <div class=" code ">
                print("Hello, world!")
            </div>
            <p>Стоит отметить, что <b>ВСЕ</b> строки с вашим статичным текстом должны быть заключены кавычками с двух сторон. Только так <b>Python</b> и функция <b>print()</b> поймет, что задача состоит в том, чтобы <b>вывести текст</b>.</p>
            <h3>А как же числа?</h3>
            <p><b>Выводить</b> можно <b>целые, дробные, комплексные числа</b>. Дробная часть отделяется точкой. Посмотрим:</p>
            <div class="code ">
                print(2.5)
            </div>
            <p>Если же речь идет только о числах, то данные такого типа можно <b>выводить</b> без кавычек. Здесь же можно <b>производить</b> различные <b>вычисления</b>: сложение, вычитание, умножение, деление, возведение в степень, например print(2*2) –
                интерпретатор выведет 4.
            </p>
            <h3>print(name)?</h3>
            <p>Через <b>print()</b> также можно <b>выводить</b> значения <u><b><a href="variables.html ">переменных</a></b></u>. Выведем значение переменной name. Как это выглядит:
            </p>
            <div class="code ">
                name = "Andrew"<br>print(name)
            </div>
            <p>Интерпретатор выведет имя Andrew.</p>
            <h3>Конкатенация? Что?</h3>
            <p>Попросту говоря, <i><b>конкатенация</b></i> – это склеивание строк, например:</p>
            <div class="code ">
                name = "Andrew"<br>print("Hello, " + name)
            </div>
            <p>Таким образом, мы можем <b>склеить</b> между собой две и более строки и <b>вывести</b> их.</p>
            <h3>PythonPythonPython</h3>
            <p>Умножить <b>строку</b> на <b>число</b>? Легко!</p>
            <div class="code ">
                print("Python"*3)
            </div>
        </div>
    </div>
</body>

</html>