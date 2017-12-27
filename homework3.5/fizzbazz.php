<!--
классическая задача для собеседований: FizzBazz. (выводим элементы от 1 до 100.
Если элемент делится на 3 - выводим fizz, если на 5 - bazz.
А если делится на 15 - fizzBazz. Выводить само число во всех остальных случаях)
-->

<?php
    $a = array();

    for($i = 0; $i < 100; $i++){
        $a[] = $i + 1;
    }

    function fizz_bazz($array){
        if(!empty($array)){
            foreach($array as $elem){
                if($elem % 15 == 0){
                    echo "fizzBazz</br>";
                }elseif($elem % 5 == 0){
                    echo "bazz</br>";
                }elseif($elem % 3 == 0){
                    echo "fizz</br>";
                }else{
                    echo $elem . '</br>';
                }
            }
        }
        return;
    }

    fizz_bazz($a);



