<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    // $a=12;
    // $b=18;
    // echo ($a+$b);

    for($x=1; $x<=6; $x++){
        // for($y=1; $y<=6-$x; $y++){
        //     echo "&nbsp&nbsp";
        // };
        for($z=1; $z<=$x; $z++){
            echo "*";
        }; echo "<br>";
    };

    for($x=6; $x>=1; $x--){
        // for($y=1; $y<=6-$x; $y++){
        //     echo "&nbsp&nbsp";
        // }; 
        for($z=1; $z<=$x; $z++){
            echo "*";
        }; echo "<br>";
    };
    ?>
</body>
</html>