<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Вывод данных</title>
    <meta name="Description" content="Запрос данных от пользователя выполняет функция input(). Ее аргументом может быть строка, например вопрос, на который пользователь должен дать ответ. " />
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
            <h2>Ввод данных</h2>
            <p>Запрос данных от пользователя выполняет функция <b>input()</b>. Ее аргументом может быть <b>строка</b>, например вопрос, на который пользователь должен дать ответ. Данные, которые примет <b>input()</b> с клавиатуры, необходимо поместить в
                <a href="variables.html"><u><b>переменную</b></u></a>. Запросим у пользователя ответ на вопрос и выведем его:
            </p>
            <div class="code">
                answer = input("Как дела?")<br>print(answer)
            </div>
            <p>Python выведет наш ответ.</p>
            <p>Важно запомнить, что <b>input() всегда возвращает строку</b>.</p>
            <h3>Преобразовываем данные?</h3>
            <p>Допустим, нам необходимо ввести число с клавиатуры, и впоследствии, вывести результат его умножения на 10, то нам нужно изменить тип данных той переменной, куда мы записывали ответ на наш <b>input()</b>. Т. к. <b>input()</b> возвращает тип
                данных «строка», нам нужно поменять этот тип данных на «число». Делается это с помощью встроенной в <b>Python</b> функцией int(). В качестве аргумента для функции <b>берется строка</b>, где находятся <b>ТОЛЬКО цифры</b> (нельзя превратить
                буквы и символы в числа):
            </p>
            <div class="code">
                num = input("Введи число:")<br>num = int(num)<br>print(num*10)
            </div>
            <p>Программа выполняет свою задачу. Но хочется сделать вывод в формате «25 * 10 = 250».</p>
            <p>Вспоминаем про
                <a href="output.html"><u><b>конкатенацию</b></u></a>, про которую говорили на
                <a href="output.html"><u><b>прошлом уроке</b></u></a>. Увы, но число и строку нельзя между собой сложить. Придется наши числа превращать в строки. На помощь приходит функция <b>str()</b>.
            </p>
            <div class="code">
                num = input("Введи число:")<br>num = int(num)<br>result = num*10<br>print(str(num) + " * 10 = " + str(result))
            </div>
        </div>

    </div>
</body>

</html>