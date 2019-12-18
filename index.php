<?php

//Определить, является ли заданное целое число N простым.

//Проверка на простое число
function isSimple(int $numb): bool
{
    if($numb == 0 || $numb == 1) {
        return false;
    }
    for ($i=2;$i<=$numb/2;$i++) {//итерации до N/2
        if ($numb % $i == 0) {
            return false;
        }
    }
    return true;
}

$N = 1; // Заданное число

if(isSimple($N)) {
    echo "Заданное число $N является простым";
}
