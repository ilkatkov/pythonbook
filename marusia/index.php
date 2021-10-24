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
$operator = 'оператор';
$cicles = 'циклы';
$functions = 'функции';

$teach = array('учить', 'учиться', 'основы', 'узнать', 'обучить', 'обучение', 'лекция', 'лекции', 'лекцию', 'учение');
$test = array('тест', 'тестирование', 'знания', 'вопросы', 'проверка', 'тестироваться', 'тестировать', 'проверить', 'тесты');

$nums_theme = array(
    array('один', 'адин', '1', 'первый', 'первая', 'первое', 'first'),
    array('два', '2', 'второй', 'вторая', 'второе', 'second'),
    array('три', '3', 'третий', 'третья', 'третье', 'third'),
    array('четыре', '4', 'четвертый', 'четвертая', 'четвертое', 'fourth'),
    array('пять', '5', 'пятый', 'пятая', 'пятое', 'fifth'),
    array('шесть', '6', 'шестой', 'шестая', 'шестое', 'sixth'),
    array('семь', '7', 'седьмой', 'седьмая', 'седьмое', 'seventh'),
);

$user_answer = $data['request']['nlu']['tokens'];
if (in_array("пока", $user_answer) || in_array("стоп", $user_answer) || in_array("выход", $user_answer) || in_array("свидания", $user_answer) || in_array("прощай", $user_answer) || in_array("выйти", $user_answer) || in_array("выход", $user_answer)) {
    $response = array("session" => $session, "version" => $version, "response" => array("text" => "До свидания!", "end_session" => true));
} else if (is_null($data['state']['session']['active'])) {
    $response = array("session" => $session, "version" => $version, "response" => array("text" => "Добро пожаловать в Книгу {Python}{п`айтон}!\n\nЯ могу научить Вас основам языка программирования Python либо провести тест`ирование. С чего начнем?", 'buttons' => $start_buttons, "end_session" => false), 'session_state' => array("active" => true));
} else if ($data['state']['session']['active']) {
    if (is_null($data['state']['session']['choice'])) {
        $choice = $data['request']['nlu']['tokens'];
        if (array_intersect($choice, $teach)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему ур`ока:{\n\n1. }{\n}^Вывод данных^\n{2. }{}^Ввод данных^\n{3. }{}^Перем`енные^\n{4. }{}^Типы данных^\n{5. }{}^Условный оператор^\n{6. }{}^Циклы^\n{7. }{^`или^}{Функции}{^Ф`ункции^?}", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (array_intersect($choice, $test)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему тестирования:{\n\n1. }{\n}^Вывод данных^\n{2. }{}^Ввод данных^\n{3. }{}^Перем`енные^\n{4. }{}^Типы данных^\n{5. }{}^Условный оператор^\n{6. }{}^Циклы^\n{7. }{^`или^}{Функции}{^Ф`ункции^?}", 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        } else {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбирай{:}{\n} лекции или тестирование!", 'buttons' => $start_buttons, "end_session" => false), 'session_state' => array("active" => true));
        }
    } else if ($data['state']['session']['choice'] == "lessons") {
        $lesson_theme = $data['request']['nlu']['tokens'];
        if (in_array($output, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[0])) {
            $text = getArticle("Вывод данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239022), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($input, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[1])) {
            $text = getArticle("Ввод данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239023), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($variables, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[2])) {
            $text = getArticle("Переменные");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239024),'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($types, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[3])) {
            $text = getArticle("Типы данных");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239025), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($operator, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[4])) {
            $text = getArticle("Условный оператор");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239026), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($cicles, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[5])) {
            $text = getArticle("Циклы");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239027), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (in_array($functions, $lesson_theme) || array_intersect($lesson_theme, $nums_theme[6])) {
            $text = getArticle("Функции");
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'card' => array("type" => "BigImage", "image_id" => 457239029), 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else if (array_intersect($lesson_theme, $test)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему тестирования:{\n\n1. }{\n}^Вывод данных^\n{2. }{}^Ввод данных^\n{3. }{}^Перем`енные^\n{4. }{}^Типы данных^\n{5. }{}^Условный оператор^\n{6. }{}^Циклы^\n{7. }{^`или^}{Функции}{^Ф`ункции^?}", 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        } else {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему ур`ока:{\n\n1. }{\n}^Вывод данных^\n{2. }{}^Ввод данных^\n{3. }{}^Перем`енные^\n{4. }{}^Типы данных^\n{5. }{}^Условный оператор^\n{6. }{}^Циклы^\n{7. }{^`или^}{Функции}{^Ф`ункции^?}", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        }
    } else if ($data['state']['session']['choice'] == "test" && is_null($data['state']['session']['test'])) {
        $test_theme = $data['request']['nlu']['tokens'];
        $points = 0;
        $question = 0;
        if (in_array($output, $test_theme) || array_intersect($lesson_theme, $nums_theme[0])) {
            $questions = getQuestions("Вывод данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Вывод данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($input, $test_theme) || array_intersect($lesson_theme, $nums_theme[1])) {
            $questions = getQuestions("Ввод данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Ввод данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($variables, $test_theme) || array_intersect($lesson_theme, $nums_theme[2])) {
            $questions = getQuestions("Переменные");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Переменные", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($types, $test_theme) || array_intersect($lesson_theme, $nums_theme[3])) {
            $questions = getQuestions("Типы данных");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Типы данных", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($operator, $test_theme) || array_intersect($lesson_theme, $nums_theme[4])) {
            $questions = getQuestions("Условный оператор");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Условный оператор", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($cicles, $test_theme) || array_intersect($lesson_theme, $nums_theme[5])) {
            $questions = getQuestions("Циклы");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Циклы", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (in_array($functions, $test_theme) || array_intersect($lesson_theme, $nums_theme[6])) {
            $questions = getQuestions("Функции");
            $question_buttons = array(array('title' => $questions[$question]['option1']), array('title' => $questions[$question]['option2']), array('title' => $questions[$question]['option3']), array('title' => $questions[$question]['option4']));
            $text = (string)($question + 1) . "й вопрос: " . $questions[$question]['question'] . "\nВарианты ответа: \n{1. }{}" . $questions[$question]['option1'] . "\n{2. }{}" . $questions[$question]['option2'] . "\n{3. }{}" . $questions[$question]['option3'] . "\n{4. }{}" . $questions[$question]['option4'];
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, "buttons" => $question_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test", "test" => "Функции", "points" => 0, "question" => 0, "ready_for_answer" => true));
        } else if (array_intersect($test_theme, $teach)) {
            $response = array("session" => $session, "version" => $version, "response" => array("text" => "Выбери тему ур`ока:\n\n{1.}{} Вывод данных\n{2.}{} Ввод данных\n{3.}{} Перем`енные\n{4.}{} Типы данных\n{5.}{} Условный оператор\n{6.}{} Циклы\n{7.}{или} {Функции}{Ф`ункции?}", 'buttons' => $lessons_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "lessons"));
        } else {
            $text = "Выбери тему тестирования:{\n\n1. }{\n}^Вывод данных^\n{2. }{}^Ввод данных^\n{3. }{}^Перем`енные^\n{4. }{}^Типы данных^\n{5. }{}^Условный оператор^\n{6. }{}^Циклы^\n{7. }{^`или^}{Функции}{^Ф`ункции^?}";
            $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
        }
    } else if (!is_null($data['state']['session']['test'])) {
        $points = $data['state']['session']['points'];
        $question = $data['state']['session']['question'];
        $questions = getQuestions($data['state']['session']['test']);
        $question_theme = $data['state']['session']['test'];
        $user_answer = $data['request']['nlu']['tokens'];
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
                if ($points >= 6 && $points <= 7) {
                    $result = "\n\nБраво! Отличный результат!";
                } else if ($points >= 4 && $points <= 5) {
                    $result = "\n\nВы показали хороший результат!";
                } else if ($points >= 2 && $points <= 3) {
                    $result = "\n\nУдовлетворительно.";
                } else if ($points >= 0 && $points <= 1) {
                    $result = "\n\nВидимо, вы не готовы к этой теме тестирования.";
                }
                $text .= $result . "\nВаш счет: " . $points . " из " . count($questions) . ".\n\nМожем пройти тестирование по другой теме или перейти к лекциям.";
                $response = array("session" => $session, "version" => $version, "response" => array("text" => $text, 'buttons' => $test_buttons, "end_session" => false), 'session_state' => array("active" => true, "choice" => "test"));
            }
        }
    }
}




header('Content-Type: application/json');
echo json_encode($response);
