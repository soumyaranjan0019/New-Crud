<?php
    // $a = [
    //     [10,22,23]
    // ];

    // echo "<pre>";
    //     print_r ($a);
    // echo "</pre>";

    

    // $a = [10,9,23];

    // echo $a[1];


    $color = ['a'=>'red','b'=>'green','c'=>'blue','d'=>'blue'];

    // $newArray = array_values($color);
    $newArray = array_unique($color);

    echo "<pre>";
        print_r ($newArray);
    echo "</pre>";

?>