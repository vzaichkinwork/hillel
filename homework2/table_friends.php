<?php
    header('Content-type: text/html; charset=utf-8');
    // вытащил содерживмое файла
    $friends = file_get_contents("db/friends.txt");

    // создал массив из строк
    $friends_as_strings = explode("\n", $friends);
    echo '<table border="1" cellspacing="0" width="150">';
    foreach ($friends_as_strings as $friend) {
        $name_phone = explode("|", $friend);
        echo '<tr>
                 <td width="70">'.$name_phone[0].'</td>
                 <td>'.$name_phone[1].'</td>
              </tr>';
    }
    echo '</table>';

