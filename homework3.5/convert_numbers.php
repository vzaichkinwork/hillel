<!--
Написать функцию которая конвертирует число состоящее из арабских (обычных) цифр  в число состоящее из римских цифр,
-->
<?php
    $integer1 = 9;
    $integer2 = 23;
    $integer3 = 324;
    $integer4 = 3434;

    function convert_to_roman($number){ //todo
        $romans = array(array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'),
            array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'),
            array('', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'),
            array('', 'M', 'MM', 'MMM'));

        $num = strval($number);

        $num_len = strlen($num);

        if ($num_len == 1) {
            foreach ($romans as $roman_array) {
                foreach ($roman_array as $key => $roman_number) {
                    if ($key == substr($num, 0, 1)) {
                        $num = $roman_number;
                        return $num;
                    }
                }
            }
        } elseif ($num_len == 2) {
            return $num;
        } elseif ($num_len == 3) {
            return $num;
        } elseif ($num_len == 4) {
            return $num;
        }
        return $num;
    }

    echo convert_to_roman($integer1);
