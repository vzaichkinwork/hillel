<!--
написать функцию которая разворачивает массив
-->

<?php
    $a = array(1, 22, 333, 4444, 55555);

    function reverse_array($array){
        $reversed_array = array();

        for($i = count($array) - 1; $i >= 0;  $i--){
            $reversed_array[] = $array[$i];
        }
        return $reversed_array;
    }

    echo '<pre>';
    print_r(reverse_array($a));
    echo '</pre>';