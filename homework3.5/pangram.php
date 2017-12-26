<!--
Написать функцию которая проверяет является ли входная строка панграммом
-->

<?php
    $str1 = "The quick brown fox jumps over the lazy dog";

    $str2 = "fox jumps over the lazy dog";

    function is_pangram($string){
        $result = false;

        $alphabet = str_split("abcdefghijklmnopqrstuvwxyz");
        $string = str_replace( " ", "", $string);
        $string_by_elements = str_split($string);

        $res = array();

        for ($i = 0; $i < count($alphabet); $i++){
            if($alphabet[$i] == $string_by_elements[$i]){
                $res[] = $string_by_elements[$i];
                $result = true;
            }
        }

        if(count($res) == count($alphabet)){
            echo "Is pangram";
        }else{
            echo "not enough symbols used";
        }

        return;
    }

    is_pangram($str1);

