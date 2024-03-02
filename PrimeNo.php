<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeComposite</title>
</head>
<body>
    <?php

    $a=9;
    $b=2;
        while($a>$b){
            if($a % $b !== 0){
                $b++;
                echo("Prime No");   
            }; echo("<br>");
            
            // else{
            //     echo("Composite  No");
            // }
           

        };
    ?>
</body>
</html>