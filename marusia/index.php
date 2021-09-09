<?php
include_once "../functions/mysql.php";


$data = json_decode(file_get_contents('php://input'), true);

$session = $data['session'];
$version = $data['version'];


// кнопки

$lessons_buttons = array(array('title' => "Вывод данных"), array('title' => 'Ввод данных'), array('title' => 'Переменные'), array('title' => 'Типы данных'), array('title' => 'Условный оператор'), array('title' => 'Циклы'), array('title' => 'Функции'),  array('title' => 'Тестирование'));
$test_buttons = array(array('title' => "Вывод данных"), array('title' => 'Ввод данных'), array('title' => 'Переменные'), array('title' => 'Типы данных'), array('title' => 'Условный оператор'), array('title' => 'Циклы'), array('title' => 'Функции'),  array('title' => 'Лекции'));
$start_buttons = array(array('title' => "Лекции"), array('title' => 'Тестирование'));


// слова-триггеры
$output = 'вывод';
$input = 'ввод';
$variables = 'переменные';
$types = 'типы';
$operator = 'условный';
$cicles = 'циклы';
$functions = 'функции';
$lessons = 'лекции';
$testing = 'тестирование';


if (is_null($data['state']['session']['active'])) {
    $response = array("session" => $session, "version" => $version, "response" => array("text" => "Привет, это Книга {Python}{п`айтон}! Я могу научить тебя основам языка программирования Python, либо провести тестирование. С чего начнем?", 'buttons' => $start_buttons, "end_session" => false), 'session_state' => array("active" => true));
} else if ($data['state']['session']['active']) {
    if (is_null($data['state']['session']['choice'])) {
        $choice = $data['request']['nlu']['tokens'][0];
        $teach = array('учить', 'учиться', 'основы', 'узнать', 'обучить', 'обучение', 'лекция', 'лекции');
        $test = array('тест', 'тестирование', 'знания', 'проверка', 'тестировать', 'проверить');
        if (in_array($choice, $teach)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему урока. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($choice, $test)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему тестирования. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции", 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        } else {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбирай{:}{\n} лекции или тестирование!", 'buttons' => $start_buttons, "end_session" => false), 'session_state' => array("active" => true));
        }
    } else if ($data['state']['session']['choice'] == "lessons") {
        $lesson_theme = $data['request']['nlu']['tokens'];

        if (in_array($output, $lesson_theme)) {
            $text = getArticle("Вывод данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($input, $lesson_theme)) {
            $text = getArticle("Ввод данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($variables, $lesson_theme)) {
            $text = getArticle("Переменные");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($types, $lesson_theme)) {
            $text = getArticle("Типы данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($operator, $lesson_theme)) {
            $text = getArticle("Условный оператор");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($cicles, $lesson_theme)) {
            $text = getArticle("Циклы");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($functions, $lesson_theme)) {
            $text = getArticle("Функции");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($testing, $lesson_theme)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему тестирования. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции\n{8.}{} Модули", 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        } else {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему урока. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции\n{8.}{} Модули", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        }
    } else if ($data['state']['session']['choice'] == "test" && is_null($data['state']['session']['test'])) {
        $test_theme = $data['request']['nlu']['tokens'];
        $points = 0;
        $question = 0;
        if (in_array($output, $test_theme)) {
            $questions = getQuestions("Вывод данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Вывод данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($input, $test_theme)) {
            $questions = getQuestions("Ввод данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Ввод данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($variables, $test_theme)) {
            $questions = getQuestions("Переменные");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Переменные", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($types, $test_theme)) {
            $questions = getQuestions("Типы данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Типы данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($operator, $test_theme)) {
            $questions = getQuestions("Условный оператор");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Условный оператор", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($cicles, $test_theme)) {
            $questions = getQuestions("Циклы");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Циклы", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($functions, $test_theme)) {
            $questions = getQuestions("Функции");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Функции", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($lessons, $test_theme)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему урока. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else {
            $text = "Выбери тему тестирования. \n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Переменные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{} Функции";
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        }
    } else if (!is_null($data['state']['session']['test'])) {
        $points = $data['state']['session']['points'];
        $question = $data['state']['session']['question'];
        $questions = getQuestions($data['state']['session']['test']);
        $question_theme = $data['state']['session']['test'];
        if ($data['state']['session']['ready_for_answer']) {
            $user_answer = $data['request']['nlu']['tokens'];
            if (in_array($questions[$question]['correct'], $user_answer)) {
                $text = "Верно!";
                $points = $points + 1;
            } else {
                $text = "Ответ неправильный!";
            }
            $question = $question + 1;
            if ($question < count($questions)) {
                $text .= "\n" . (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
                $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
                $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => $question_theme, "points" => $points, "question" => $question, "ready_for_answer" => true));
            } else {
                $text .= "\n\nВаш счет: " . $points . ".\nМожем пройти тестирование по другой теме или перейти к лекциям.";
                $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
            }
        }
    }
}




header('Content-Type: application/json');
echo json_encode($response);
