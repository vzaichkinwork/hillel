<!--
Написать функцию которая проверяет является ли входная строка панграммом
-->

<?php
    $str1 = "The quick brown fox jumps over the lazy dog";

    $str2 = "fox jumps over the lazy dog";

    function is_pangram($string){ // todo

        $alphabet_letters = "abcdefghijklmnopqrstuvwxyz";
        $alphabet = str_split($alphabet_letters);
        $string = str_replace( " ", "", $string);
        $string = strtolower($string);
        $string_by_elements = str_split($string);

        $result = array();

        //количество элементов массивов
        $alphabet_len = count($alphabet);
        $string_len = count($string_by_elements);

        //если символов в строке меньше, чем в алфавите - это точно не панграмм
        if($alphabet_len >= $string_len){
            echo "not a pangram";
        }else{
            foreach ($string_by_elements as $letter){
                //если буква строки совпадает с буквой алфавита - добавляем её в новый массив
                if(stristr($alphabet_letters, $string) === false){
                    $result[] = $letter;
                }
            }
            //убираем повторяющиеся значения
            $result = array_unique($result);
            if(count($result) < $alphabet_len){
                echo "not a pangram";
            }elseif (count($result) == $alphabet_len){
                echo "is pangram";
            }
        }
        return;
    }

    is_pangram($str1);

