<?php

printf("Меня зовут %s, мне %d лет, 
это %X в шестнадцатиричной системе исчисления.
и %b в двоичной" 
, 'Савелий', 27, 27, 27);

$r=65;
$g=127;
$b=245;

printf  ("<span style='color:#%X%X%X'>Hi</span>",
$r+20, $g+20, $b-200);
echo    ("<br>");
printf  ("Result: $%.2f", 123.42 / 12 );    

echo "<pre>";
printf  ("Result: $%15f\n",       123.42 / 12 );
printf  ("Result: $%015f\n",      123.42 / 12 );
printf  ("Result: $%15.2f\n",     123.42 / 12 );
printf  ("Result: $%015.2f\n",    123.42 / 12 );
printf  ("Result: $%'#15.2f\n",   123.42 / 12 );

echo "</pre>";
echo "<pre>";

$h = 'Rasmus';

printf  ("[%s]\n",                    $h);
printf  ("[%12s]\n",                  $h);
printf  ("[%-12s]\n",                 $h);
printf  ("[%'#12s]\n",                $h);
printf  ("[%'#12s]\n",                $h);

$d = 'Rasmus Lerdorf';

printf  ("[%12.8s]\n",                $d);
printf  ("[%-12.12s]\n",              $d);
printf  ("[%-'@12.10s]\n",            $d);

$hexstring = sprintf("%X%X%X", 65, 127, 245);

$out = sprintf("Result: $%.2f\n", 123.42 / 12 );

echo $out;
echo $hexstring;
echo "<hr>";

echo time();                            echo "<br>";
echo time() + 7 * 24 * 60 * 60;         echo "<br>";
echo time() + 7 * 24 * 60 * 60;         echo "<br>";
echo mktime(0, 0, 0, 1, 1, 2000);       echo "<br>";


echo date("l F jS, Y - g:ia, time)");

?>