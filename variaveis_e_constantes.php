<?php
    $morango = 5; //variável morango recebendo o valor 5
    $bolacha = 3; //variável bolacha recebendo o valor 3
    //lembrando que no PHP o tipo das variáveis são reconhecidos automaticamente pela linguagem
    echo $morango/$bolacha;// realizando a divisão entre as variaveis morango e bolacha
    echo "<br>";//quebra de linha        
    $a = "ola"; // variavel a recebendo "ola"
    $$a = "mundo"; // criação de variáveis variáveis, fazendo com que a variável $ola receba "mundo"
    /*
        $a = "ola";
        $$a --> $ola
    */
    echo $a." ".$ola."<br>";
    
    function somar(){
        /*
            global $morango, $bolacha  <-- tambem funcionam
        */
        echo $GLOBALS["morango"]+$GLOBALS["bolacha"];
        
    }
    somar(); //executando a função somar
    $bolacha = 2;
    echo "<br>".$bolacha."<br>";

    define("pi", 3.14); // criação de constantes

    echo $bolacha * pi; //multiplicando bolacha(variável) e pi(constante)
 
?>
