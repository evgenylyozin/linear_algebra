<?php
/* 
* Правило вычисления определителя третьего порядка называет-
* ся правилом Саррюса или правилом треугольников
*/

echo "Введите элементы квадратной матрицы 3-го порядка, все 9
элементов через пробел:\n";

$line = trim(fgets(STDIN));

$numbers = explode(' ',$line);
$det = $numbers[0]*$numbers[4]*$numbers[8]+
        $numbers[1]*$numbers[5]*$numbers[6]+
        $numbers[2]*$numbers[3]*$numbers[7]-
        $numbers[2]*$numbers[4]*$numbers[6]-
        $numbers[5]*$numbers[7]*$numbers[0]-
        $numbers[1]*$numbers[3]*$numbers[8];

echo "Определитель следующей квадратной матрицы 3-го порядка:\n";

for ($i=1;$i<10;$i++) {
    echo $numbers[$i-1];
    echo " ";
    if ($i%3 === 0){
        echo "\n";
    }
}
echo "Равен:\n";
echo $det."\n";