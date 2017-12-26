<!--
Написать функцию которая проверяет является ли входная строка панграммом
-->

<?php
    $str1 = "The quick brown fox jumps over the lazy dog";

    $str2 = "fox jumps over the lazy dog";

    function is_pangram($string){ // todo

        $alphabet = str_split("abcdefghijklmnopqrstuvwxyz");
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
            for ($i = 0; $i < $string_len; $i++){
                if(in_array($string_by_elements[$i], $alphabet)){
                    $result[] = $string_by_elements[$i];
                }
                if(in_array($result[$i], $result)){
                    unset($result[$i]);
                }
                echo '<pre>';
                print_r($result);
                echo '</pre>';
            }

        }

        return;
    }

    is_pangram($str1);

