<!--
написать функцию которая разворачивает массив
-->

<?php
    $a = array(1, 22, 333, 4444, 55555);

    function reverse_array($array){
        $reversed_array = array();
        $val = count($array) - 1;
        for($i = 0; $i < count($array); $i++){
            $reversed_array[$i] = $array[$val];
            $val--;
        }
        return $reversed_array;
    }

    echo '<pre>';
    print_r(reverse_array($a));
    echo '</pre>';