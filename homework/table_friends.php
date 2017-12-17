<html>
 <head>
   <title>Таблица друзей</title>
   <meta content="text/html; charset=utf-8">
 </head>
 <body>
 <?php

 // вытащил содерживмое файла
 $friends = file_get_contents("db/friends.txt");

 // создал массив из строк
 $friends_as_strings = explode("\n", $friends);

foreach ($friends_as_strings as $friend)
{
    $name_phone = explode("|", $friend);
    echo '<table border="1" cellspacing="0" width="150">
            <tr>
                <td width="70">'.$name_phone[0].'</td>
                <td>'.$name_phone[1].'</td>
            </tr>
         </table>';
}
 ?>

 </body>
</html>