<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Функции</title>
    <meta name="Description" content="Функция - это алгоритм, названный каким-либо именем. В функцию записывают фрагмент кода, который может вызываться многократно в основной программе." />
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
            <h2>Функции</h2>
            <p>Создаем собственные <b>функции</b>.</p>
            <p><i><b>Функция</b> - это <b>алгоритм</b>, названный каким-либо именем. В функцию записывают фрагмент кода, который может вызываться многократно в основной программе.</i></p>
            <p>Есть два вида <b>функций</b>: с <b>возвратом значения</b> и <b>без</b>.</p>
            <p>Начнем с <b>функций</b>, которые <b>не возвращают значения</b>.</p>
            <p>Создадим <b>функцию</b>, которая <a href="output.html"><u><b>выводит</b></u></a> на экран среднее арифметическое двух чисел и назовем ее <b>average</b>. <b>Параметры</b> - те данные, которые необходимы для работы <b>функции</b>. Наша
                <b>функция</b> должна принимать два параметра:
                <b>число a</b> и <b>число b</b>.
            </p>
            <p>Рассмотрим конструкцию:</b>
            </p>
            <div class="code">
                def название_функции(параметр1, параметр2):<br>&nbsp;&nbsp;&nbsp;&nbsp;команда1<br>&nbsp;&nbsp;&nbsp;&nbsp;команда2
            </div>
            <p>Вернемся к <b>функции</b> из задачи:</p>
            <div class="code">
                def average(a, b):<br>&nbsp;&nbsp;&nbsp;&nbsp;print((a+b)/2)
            </div>
            <p>И вызовем ее в нашей программе:</p>
            <div class="code">
                average(4, 6)
            </div>
            <p>На экране видим результат <b>5</b>.</p>
            <p>В данный момент <b>результат функции</b> нигде <b>не сохраняется</b> - только выводится на экран.</p>
            <p>Для того чтобы мы могли в дальнейшем использовать результат работы <b>функции</b> в нашей программе, нам необходимо <b>возвращать значение</b> из <b>функции</b>.</p>
            <p>Чтобы <b>вернуть значение</b> из <b>функции</b> используется оператор <b>return</b> (вернуть).</p>
            <p>Вернемся к нашей задаче, но теперь <b>сохраним результат</b> работы <b>функции</b> в переменную <b>result</b>.</p>
            <div class="code">
                def average(a, b):<br>&nbsp;&nbsp;&nbsp;&nbsp;return a+b)/2<br>result = average(6, 16)<br>print(result)
            </div>
            <p>На экране появится результат - <b>11</b>.</p>
        </div>
    </div>
</body>

</html>