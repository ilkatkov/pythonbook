<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник Python | Типы данных</title>
    <meta name="Description" content="В Python существует множество типов данных. Поговорим об основных." />
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
            <h2>Типы данных</h2>
            <p>В <b>Python</b> существует множество <b>типов данных</b>. Поговорим об основных.</p>
            <h3>123, 3.1415, 1+2j</h3>
            <p><i><b>int</b> - <b>целые</b> числа, сокращение от слова <b>integer</b></i></p>
            <p><i><b>float</b> - <b>дробные</b> числа (целая часть <b>отделяется</b> от дробной <b>точкой</b>!)</b></i></p>
            <p><i><b>complex</b> - <b>комплексные</b> числа</i></p>
            <h3>Я строка!</h3>
            <p>Все строки имеют тип данных <b>str</b> - сокращение от слова <b>string</b> (строка). Выделяются с двух сторон <b>кавычками</b>.</p>
            <h3>Илья, Дима, Ваня</h3>
            <p>Пустой <b>список</b> создается с помощью функции <b>list()</b>.<b>Список</b> можно заполнить данными разного <b>типа</b>.</p>
            <p>Если <b>список</b> заранее должен быть с данными, то примером заполнения последовательности имен из подзаголовка будет выглядеть следующим образом:</p>
            <div class="code">
                names = ['Илья', 'Дима', 'Ваня']
            </div>
            <p>Или, вот например с <b>числами</b>:</p>
            <div class="code">
                numbers = [1, 3, 5, 7]
            </div>
            <p>Или с <b>числами</b> и <b>строками</b>:</p>
            <div class="code">
                data = [1, 'two', 3, 'four', 5]
            </div>
            <p><b>Добавляя элемент</b> в <b>список</b>, используют метод <b>.append()</b>:</p>
            <div class="code">
                data.append('six')
            </div>
            <p><b>Обратиться к элементу списка</b> можно по его <b>индексу</b> (нумерация индексов элементов списка начинается с 0):</p>
            <div class="code">
                print(data[0])
            </div>
            <p>На экран выведется <b>1</b>.</p>
            <h3>Не повторяемся!</h3>
            <p><b>Множество</b> - последовательность уникальных значений. Создать пустое множество можно с помощью функции <b>set()</b>.</p>
            <div class="code">
                orders = {1, 2, 4, 5, 7}
            </div>
            <p>Чтобы <b>добавить элемент</b> в <b>множество</b>, используется метод <b>.add()</b>:</p>
            <div class="code">
                orders.add(7)<br>orders.add(9)
            </div>
            <p><b>Множество</b> будет иметь вид {1, 2, 4, 5, 7, 9}.</p>
            <h3>Словари</h3>
            <p><b>Словари</b> - это наборы данных <b>ключ: значение</b>. Создание пустого <b>словаря</b> происходит путем вызова функции <b>dict()</b>. Нужны тогда, когда обращения к <b>значениям</b> нужно производить, используя свои уникальные <b>ключи</b>.</p>
            <div class="code">
                books = dict()
            </div>
            <p><b>Добавить пару</b> в словарь можно следующим образом:</p>
            <p><b>название_словаря[название_ключа] = значение</b></p>
            <p>например,</p>
            <div class="code">
                books['A19'] = 'Алиса в стране чудес'
            </div>
            <p>Команда <b>print(books['А19'])</b> выведет на экран <b>"Алиса в стране чудес"</b>.</p>
        </div>
    </div>
</body>

</html>