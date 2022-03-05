<?php

    // echo "array.php <br>";

    // $paper[0] = "Copier";
    // $paper[1] = "Inkjet";
    // $paper[2] = "Laser";
    // $paper[3] = "Photo";

    // for ($j = 0; $j < 4; ++$j) {
    //     echo "$j: $paper[$j] <br>";
    // }
    
    // $paper['copier'] = "Copier";
    // $paper['inkjet'] = "Inkjet";
    // $paper['laser'] = "Laser";
    // $paper['photo'] = "Photo";

    
    // echo $paper['laser'];
    
    // $paper = array ("Copier", "Inkjet", "Laser", "Photo");
    // $j = 0;

    // foreach ($paper as $item) 
    // {
    //     echo "$j: $item<br>";
    //     ++$j;
    // }

    // $paper = array ( 'copier' => "Copier & Multypurpose",
    //                  'inkjet' => "Inkjet Printer",
    //                  'laser'  => "Laser Printer",
    //                  'photo'  => "Photographic Paper"); 

    // foreach ($paper as $item => $description)
    //     echo "$item: $description<br>";
    
    // while (list($item, $description) = each($paper))
    //     echo "$item: $description<br>"; 

    // list($a, $b) = array('Alice', 'Bob');
    // echo "a=$a, b=$b"
    
    $products = array (

        'paper' => array (

            'copier' => "Copier & Multypurpose",
            'inkjet' => "Inkjet Printer",
            'laser'  => "Laser Printer",
            'photo'  => "Photographic Paper"),
        
        'pens' => array (
            
            'ball'      =>  "Ball Point",
            'hilite'    =>  "Highlighters",
            'marker'    => "Markers"),

        'misc' => array (

            'tape'  => "Sticky Tape",
            'glue'  => "Adhesives",
            'clips' => "Paperclips"
        ) 
    );

    echo "<pre>";

    foreach ($products as $section => $items)
        foreach ($items as $key => $value)
            echo "$section:\t$key\t($value)<br>";

    echo "</pre>";

    $chessboard = array (
        array('r','n','b','q','k','b','n','r'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('R','N','B','K','Q','B','N','R')
    );

    echo "<pre>";

    foreach ($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";

        echo "<br>";
    }

    // echo "</pre>";
    // echo (is_array($chessboard)) ? "Это массив" : "Это не массив";
    // echo "<br>" . (count($products));
    // echo "<br>" . (count($products, 1));
    
    
    // $arr_num =  array (2, 4, 5, 7, 42, 13);
    // $arr_str =  array ("x", "y", "z", "a", "bb", "clever");

    // sort($arr_num, SORT_NUMERIC);
    // sort($arr_str, SORT_STRING);
    // print_r($arr_num);
    // echo "<br>";
    // print_r($arr_str);

    // echo "<br> rsort <br>";
    // rsort($arr_num, SORT_NUMERIC);
    // rsort($arr_str, SORT_STRING);
    // print_r($arr_num);
    // print_r($arr_str);
    // echo "<br> shufle <br>";
    // shuffle($arr_num);
    // shuffle($arr_str);
    // print_r($arr_num);
    // print_r($arr_str);
    
    // echo "<br> <hr> <br>";

    // $temp = explode(' ', "Это предложение из пяти слов");
    // print_r($temp);

    // echo "<br> <hr> <br>";

    // $fname              = "Doctor";
    // $sname              = "Who";
    // $planet             = "Gallifrey";
    // $system             = "Gridlock";
    // $constellation      = "Kasterborous";

    // $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

    // print_r($contact );

    // $j          = 23;
    // $temp       = "hello";
    // $adress     = "1 Old Street";
    // $age        = 61; 

    // print_r (compact (explode (' ', 'j temp adress age')));
    // echo ("<hr>");
    // for ( $i = 1; $i <= 100; $i++ )
    // {
    //     echo $i;

    //     if ($i % 2 == 0) {
    //         echo ' - Чётное число';
    //     } else 
    //     {
    //         echo ' - Нечётное число';
    //     }

    //     echo "<br>";
    // }


    function get_bigger($a, $b) {
        if ($a > $b) 
        {
            echo $a; 
        } else 
        {
            echo $b;
        }
    }
    

    get_bigger(27, 42)
?>