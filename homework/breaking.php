<?php
header('Content-type: text/html; charset=utf-8');
$elements = array("выводим", "тоже выводим", "следущий с гласной", "астанавитесь!", "остановились", "тоже не выведется");

$vowels = array("й","у","е","а","о","э","я","и","ю");

foreach($elements as $element)
{
    $starts_from_vowel = false;
    $is_vowel = mb_substr($element, 0, 2);

    foreach ($vowels as $vowel){
        if($is_vowel == $vowel)
        {
            $starts_from_vowel = true;
        }
    }

    if ($starts_from_vowel){
        break;
    }else{
        echo $element . "</br>";
    }
}
?>