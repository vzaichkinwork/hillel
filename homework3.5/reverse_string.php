<!--
написать функцию которая разворачивает строку (не используем http://php.net/manual/ru/function.strrev.php)
-->

<?php
    $str = "abc";

    function reverse_string($string){
        $symbols = str_split($string);

        $reversed_symbols = array();
        $val = count($symbols) - 1;
        for($i = 0; $i < count($symbols); $i++){
            $reversed_symbols[$i] = $symbols[$val];
            $val--;
        }

        $reversed_string = implode("", $reversed_symbols);

        return $reversed_string;
    }

    echo reverse_string($str);

