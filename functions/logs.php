<?php

function write_log($http_code, $user_id, $timezone, $city, $tokens){
    $words = "";
    foreach($tokens as $word)
    {
        $words .= $word . " ";
    }
    $file = fopen("../logs/logs.txt", 'a');
    $row = date("d.m.y_H:i:s") . " - " . $user_id . " - " . $http_code . " - " . $timezone . " - " . $city . " - " . trim($words) . ";\n"; 
    fwrite($file, $row);
    fclose($file);
}

?>