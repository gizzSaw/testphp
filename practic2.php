<?php

echo "practic2.php <hr>";
echo "checkdate <br>";

$month  =   9;
$day    =   30;
$year   =   2022;

if (checkdate($month, $day, $year)) echo "Допустимая дата <br>";
else echo "Недопустимая дата <br>";
if (file_exists("testfile.txt")) echo "Файл существует <br>";
else echo "файл не существует <br>";

$fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");

$text = <<<_END
Строка 1
Строка 2
Строка 3
_END;

fwrite($fh, $text) or die ("Сбой записи файла <br>");
fclose($fh);
echo "Файл  'testfile.txt' записан успешно <br>";

$fh = fopen("testfile.txt", 'r') or 
    die("Файл не существует или вы не обладаете правами на его открытие <br>");

$line = fgets($fh);
fclose($fh);
echo $line;

$fh = fopen("testfile.txt", 'r') or 
    die("Файл не существует или вы не обладаете правами на его открытие <br>");


$text = fread($fh, 64);
fclose($fh);
echo $text;

// copy ('testfile.txt', 'testfile2.txt') or die ("Копирование невозможно");

// echo "<br> Файл успешно скопирован в 'testfile2.txt'";

if (!copy ('testfile2.txt', 'testfile42.txt')) echo "Копирование невозможно <br>";
else echo "<br> Файл успешно скопирован в 'testfile2.txt'";

?>