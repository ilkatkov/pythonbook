<?php

function connectDB()
{
    // установка часового пояса
    date_default_timezone_set('Europe/Moscow');

    // настройки БД
    $host = 'localhost';
    $user = 'root';
    $password = 'AHBkfyx17';
    $db_name = 'pythonbook.rf';

    // подключение к БД и установка кодировки UTF-8
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");
    mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'");
    return $link;
}

function getArticle($article)
{
    $query_article = "SELECT text FROM articles WHERE name = '" . $article . "'";
    $articles_sql = mysqli_query(connectDB(), $query_article);
    for ($articles_data = []; $row = mysqli_fetch_assoc($articles_sql); $articles_data[] = $row);
    return $articles_data[0]['text'] . "\n\nЖивые примеры кода смотри на книгапитон.рф в соответствующей теме урока.";
}


function getQuestions($theme)
{
    $query_questions = "SELECT question, option1, option2, option3, option4, correct FROM questions WHERE theme = '" . $theme . "'";
    $questions_sql = mysqli_query(connectDB(), $query_questions);
    for ($questions_data = []; $row = mysqli_fetch_assoc($questions_sql); $questions_data[] = $row);
    return $questions_data;
}
