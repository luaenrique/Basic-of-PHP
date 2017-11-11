<?php
    //IF + ELSE IF + ELSE
    $n1 = 3;
    if($n1 == 4){
        echo "<br>n1 é 4";
    }else if($n1 == 3){
        echo "<br>n1 é igual a 3";
    }else{
        echo "<br>n1 não é 3 nem 4";
    }
    //



    // IF+ ELSE
    if($n1 != 4){
        echo "<br>n1 é diferente de 4";
    }else{
        echo "<br>n1 é 4";
    }
    //

    echo "<br>";


    // FOR 
    for($i = 10; $i >= 0; $i--){
        $n1--;
        echo "<br>".$n1."<br>";
    }
    //

    //DO WHILE
    $n2 = 0;
    do{
        $n2++;
        echo $n2."<br>";
    }while($n2 = 5);
    //
?>
