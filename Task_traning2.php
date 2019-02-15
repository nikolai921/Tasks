<?php
//   №39   A. Разбиение последовательности цифр
//   ссылка https://codeforces.com/problemset/problem/1107/A


$string = '65432157';
$lenght = 6;
$remainder = $string;
//$strLenght = strlen($remainder);

$newString = [0];



// Внешний цикл отвечает за количество разрядов, с которых начинается расчет.
// Условие увеличение разряда это остаток при предыдущем разбиение т.е. не эффективное разбиение.

for($i = 1;$remainder != false; $i++)
{
    $remainder = $string;
    $newString = [0];

//  Внутренний цикл отвечает за повышения разрядности уже внутри каждого этапа.
//
//  Но он так же учитывает условие внешнего цикла, т.е. если начали со второго разряда
//  то и минимальное деление будет на 2 разряда.
    for($k = 0, $j = $i; $newString[count($newString) - 1] < $remainder;)
    {
        $subString = substr($remainder,0, $j+$k);

        if($subString > max($newString))
        {
            $newString[] = $subString;
            $remainder = substr_replace($remainder, '', 0, $j+$k);

            echo '</br>';
            echo $remainder;
        }
        else
        {
            $k++;
        }
    }
}

// Результат: Если массив заполнен значеиями значит разбиенеи произведенно успешно "YES"

//если присутсвует только одно число равное задаваемому числу $string,
//значит число делится только на себя что равносильно "NO"
var_dump($newString);

