<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Условный оператор</title>
    <meta name="Description" content="Чтобы наша программа могла сделать выбор в зависимости от значения переменных или утверждений, используется условный оператор if…else." />
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
            <h2>Условный оператор</h2>
            <p>Знакомимся с <b>условным оператором</b>.</p>
            <h3>Как же выбрать?</h3>
            <p>Чтобы наша программа могла сделать выбор в зависимости от значения переменных или <b>утверждений</b>, используется <b>условный оператор if…else</b>.</p>
            <p><i><b>Утверждение</b> – это выражение, которое может быть истинным (<b>True</b>) или ложным (<b>False</b>).</i></p>
            <p>Пополняем словарный запас:</p>
            <p><i><b>if</b> – если<br><b>else</b> - иначе</i></p>
            <p>Изучаем конструкцию оператора:</p>
            <div class="code">
                if
                <условие>:<br>&nbsp;&nbsp;&nbsp;&nbsp;команда1<br>&nbsp;&nbsp;&nbsp;&nbsp;команда2<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;команда3
            </div>
            <p>Обратите внимание, что Команды вкладываются в <b>if</b> и в <b>else</b> (делаются отступы вложенных команд в один <b>TAB</b> или <b>4 пробела</b>). <b>If</b> и <b>else</b> пишутся строго друг под другом.</p>
            <p>Т.е. если <b>утверждение истинно</b>, то будут выполняться Команда1 и Команда2. В противном случае выполнится Команда3. Также <b>условный оператор</b> можно использовать без ветки <b>else</b>.</p>
            <p>Если же нам нужно перебрать множество вариантов событий, то мы можем использовать <b>elif</b> (сокращение от <b>else if</b>).</p>
            <p>Операторы сравнения:</p>
            <p><i>== - равно<br>!= - не равно<br>
                    < - меньше<br>> - больше<br>
                        <= - меньше или равно<br>>= - больше или равно
                </i></p>
            <p>Рассмотрим пример, в котором пользователь вводит 2 числа и выясняет, какое из них больше. Если числа равны, то программа должна будет оповестить нас об этом.</p>
            <div class="code">
                a = int(input("Введи первое число:"))<br>b = int(input("Введи второе число:"))<br><br>if a == b:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Числа равны.")<br>elif a > b:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(a, "больше" b)<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(b,
                "больше", a)
            </div>
        </div>
</body>

</html>