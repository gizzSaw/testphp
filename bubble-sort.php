<?php
echo"<hr>";
echo"bubble-sort.php";

$arr = arrat (5, 1, 4, 3, 6, 2);
echo "Входной массив: " . implode(",",$arr) . "\n";
echo "Итераций: " . (count($arr) - 1) * (count($arr)/2) . "\n";

$outer_iteration = 1;
$inner_iteration = 1;

for ($a = 0; a < count($arr); $a++) {
    echo "\n == Внешняя интерация" . $outer_iteration++ . "\n"; 
}