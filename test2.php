<?php

    echo strrev(" .dlrow olleH");
    echo str_repeat("yo <br>", 10);
    echo strtoupper("yo <br>");
    echo strtoupper("yo <br>");

    $ucf = ucfirst(strtolower("ddddDDDDdDDGTRHREf руССкий теКСт <br>"));
    echo $ucf;


    $a1 = "WILLIAM";
    $a2 = "henry";
    $a3 = "gatES";
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names();
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";

    function fix_names()
    {
        global $a1; $a1 = ucfirst(strtolower($a1));
        global $a2; $a2 = ucfirst(strtolower($a2));
        global $a3; $a3 = ucfirst(strtolower($a3));
    }

?>