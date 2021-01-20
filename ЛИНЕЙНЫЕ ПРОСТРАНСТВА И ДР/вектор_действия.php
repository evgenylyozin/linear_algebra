<?php
/* 
* Дано определенное арифметическое линейное пространство
* и пара соответствующих векторов, найти их сумму и произведения
* на переданный коэффициент
*/


$line = trim(fgets(STDIN));

$numbers = explode(' ',$line);
$vector_1 = [];
$vector_2 = [];
$vector_sum_result = [];
$vector_1_multiply_result = [];
$vector_2_multiply_result = [];
$vector_length = $numbers[0];
$some_value = $numbers[1];

$numbers = array_slice($numbers,2);

for ($j=1;$j<3;$j++)
{
    for ($i=0;$i<$vector_length;$i++)
    {
        if($j===1){
            array_push($vector_1,$numbers[0]);
            $numbers = array_slice($numbers,1);
        } else {
            if(count($numbers) === 1) {
                array_push($vector_2,$numbers[0]);
            } else {
                array_push($vector_2,$numbers[0]);
                $numbers = array_slice($numbers,1);
            }
        }  
    }
}


for ($i=0;$i<$vector_length;$i++)
{
    array_push($vector_sum_result,$vector_1[$i]+$vector_2[$i]);
    array_push($vector_1_multiply_result,$vector_1[$i]*$some_value);
    array_push($vector_2_multiply_result,$vector_2[$i]*$some_value);

    
}

echo "Первый вектор:\n";
for ($i=0;$i<$vector_length;$i++)
{
    echo $vector_1[$i];
    echo " ";
}
echo "\n";
echo "Второй вектор:\n";
for ($i=0;$i<$vector_length;$i++)
{
    echo $vector_2[$i];
    echo " ";
}
echo "\n";

echo "Результат суммы векторов:\n";
for ($i=0;$i<$vector_length;$i++)
{
    echo $vector_sum_result[$i];
    echo " ";
}
echo "\n";
echo "Коэффициент умножения:\n";
echo $some_value;
echo "\n";

echo "Результат умножения 1-го вектора:\n";
for ($i=0;$i<$vector_length;$i++)
{
    echo $vector_1_multiply_result[$i];
    echo " ";
}
echo "\n";

echo "Результат умножения 2-го вектора:\n";
for ($i=0;$i<$vector_length;$i++)
{
    echo $vector_2_multiply_result[$i];
    echo " ";
}
echo "\n";