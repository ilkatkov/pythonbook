<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Циклы</title>
    <meta name="Description" content="В Python циклы бывают двух видов: с условием и с параметром." />
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
            <h2>Циклы</h2>
            <p><b>Циклы</b> - тоже неотъемлемая часть наших программ!</p>
            <p>В Python циклы бывают двух видов: с <b>условием</b> и с <b>параметром</b>.</p>
            <p>Начнем с цикла с условием.</p>
            <h3>Пароль неверный!</h3>
            <p>Реализуем такой алгоритм, при котором пользователь не может пройти дальше, <b>пока</b> не введет верный пароль. Количество попыток неограниченно.</p>
            <p>Для этого нам понадобится цикл <b>while</b> (пока, до тех пор как). Логика программы такова: пока
                <a href="input.html"><u><b>вводится</b></u></a> неверный пароль, просить его <a href="input.html"><u><b>ввести</b></u></a> заново, иначе <a href="output.html"><u><b>вывести</b></u></a> строку "Добро пожаловать!".
            </p>
            <p>Изучим конструкцию <b>цикла while:</b></p>
            <div class="code">
                while
                <условие>:<br>&nbsp;&nbsp;&nbsp;&nbsp;команда1<br>&nbsp;&nbsp;&nbsp;&nbsp;команда2
            </div>
            <p><b>Цикл</b> выполняется, пока условие <b>истинно</b>.</p>
            <p>Код:</p>
            <div class="code">
                password = input("Введите пароль:")<br> while password != "python":<br>&nbsp;&nbsp;&nbsp;&nbsp;password = input("Попробуйте еще раз:")<br>print("Добро пожаловать!")
            </div>
            <p>В данном случае команда повторного ввода пароля будет выполняться каждый раз, когда введенный пароль не равняется "python". Как только выражение password != "python" будет равно False, тогда <b>цикл закончится</b> и выполнится четвертая строчка
                кода.
            </p>
            <h2>Один, два, три...</h2>
            <p>С помощью <b>цикла while</b> также можно создать <b>цикл-счетчик</b>.</p>
            <p>Для начала создается <b>переменная-счетчик</b> - <a href="variables.html"><u><b>переменная</b></u></a>, в которой будет храниться число итераций (повторов) цикла.</p>
            <div class="code">
                count = 1<br> while count
                <=5:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(count)<br>&nbsp;&nbsp;&nbsp;&nbsp;count += 1
            </div>
            <p>Согласно условию, цикл выполняется до тех пор, <b>пока</b> счетчик меньше либо равен пяти. Каждую <b>итерацию цикла</b> выводится текущее значение переменной <b>count</b>, которая каждый раз увеличивается на единицу.</p>
            <h2>Список продуктов</h2>
            <p>Реализуем решение задачи с помощью <b>цикла for</b> (для).</p>
            <p><b>Цикл for</b> используется для перебора элементов последовательностей, например списков или диапазона чисел.</p>
            <p>Допустим, у нас есть список необходимых для покупки товаров: огурцы, помидоры, шоколад, бутылка воды. Необходимо вывести эти товары по очереди с новой строки.</p>
            <div class="code">
                goods = ['огурцы', 'помидоры', 'шоколад', 'бутылка воды']<br>print("Список товаров:")<br>for item in goods:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(item)
            </div>
            <p>Т.е. <b>для</b> каждого товара (<b>item</b>) в (<b>in</b>) списке <b>oods</b>g необходимо выполнить печать его название на экране.</p>
            <h2>Пять, шесть, семь...</h2>
            <p>Цикл-счетчик можно написать и с помощью <b>цикла for</b>. Даже проще.</p>
            <p>Для того, чтобы задать <b>диапазон</b> чисел, используется функция <b>range(n, m)</b>, где <b>n</b> - число начала диапазона, а <b>m</b> - число конца-1. Т.е. <b>range(1, 10)</b> - это последовательность чисел от 1 до 9.</p>
            <div class="code">
                for num in range(5, 8):<br>&nbsp;&nbsp;&nbsp;&nbsp;print(num)
            </div>
            <p>На экран будут выведены числа <b>5, 6 и 7</b>.</p>
        </div>
    </div>
</body>

</html>