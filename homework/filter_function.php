<?php
    $array = [1, 2, 3, 4, 5, 6];


    echo '<pre>';
    echo "Оригинальный массив" . "</br>";
    print_r($array);
    echo '</pre>';

    function filter_odd($arr){
        foreach ($arr as $num){
            if($num % 2 == 0){
                echo $num . " - четное число" . "</br>";
            }else{
                $array_odd_num[] = $num;
            }
        }

        echo '<pre>';
        echo "Массив нечетных чисел" . "</br>";
        print_r($array_odd_num);
        echo '</pre>';

        return $array_odd_num;
    }

    filter_odd($array);

    /*echo '<pre>';
    print_r($array);
    echo '</pre>';*/

?>