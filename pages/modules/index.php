<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Модули</title>
    <meta name="Description" content="Создаем собственные модули и подключаем готовые." />
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
            <h2>Модули</h2>
            <p>Создаем собственные <b>модули</b> и <b>подключаем готовые</b>.</p>
            <p><i><b>Модуль</b> - это <b>файл</b> с кодом <b>Python</b>.</i></p>
            <p>Каждый раз, когда мы пишем отдельную программу, мы <b>создаем модуль.</b></p>
            <h3>Подождите</h3>
            <p>Допустим, нам необходимо сделать таймер, между числами которого будет <b>задержка</b> 1 секунда. Для этого нам понадобится <b>модуль time</b>.</p>
            <p>Для того, чтобы <b>подключить модуль и его <a href="functions.html"><u>функции</u></a></b>, используется конструкция:</p>
            <div class="code">
                from название_модуля import название функции
            </div>
            <p>Либо же <b>импорт всех функций</b>:</p>
            <div class="code">
                from название_модуля import *
            </div>
            <p>Вернемся к задаче с таймером. Для задержки используется функция <b>sleep()</b>.</p>
            <div class="code">
                from time import sleep<br>count = 10<br>while count > 0:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(count)<br>&nbsp;&nbsp;&nbsp;&nbsp;count -= 1<br>&nbsp;&nbsp;&nbsp;&nbsp;sleep(1)
            </div>
            <p><b>Таймер</b> выведет числа от 10 до 1 с <b>интервалом</b> в <b>одну секунду</b>.</p>
        </div>
    </div>
</body>

</html>