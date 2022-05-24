<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES</title>
</head>
<body>
    <?php
        echo "hola";
        echo "<br><b>Hola a todos</b>";
        print "<p>Hola print</p>\n";  // \n es un salto de linea como un br (print y echo tienen la misma funcion)

        $saludo ="HOLAAAAA";
        echo $saludo;

        echo "<br> Mensaje: ". $saludo . ". Fin del mensaje<br>"; // los . sirven para concatenar cosas

        $a=8;
        $b=2;
        $c=2;

        echo $a +$b;
        $resultado= $a-$b;
        echo "<br>";
        echo $resultado;
        $a = $a +1;
        $a++; // estos 2 ultimos casos son lo mismo 

        $a = $a -1;
        $a--; // estos 2 ultimos casos son lo mismo 

        $a = $a *2;
        $a *=2; // estos 2 ultimos casos son lo mismo 
        echo $a;
        echo "<br>";

        $tabla = ["valor1", "valor2"]; //tabla unidireccional
        $tabla2 =[["v1","v2"],["v3","V4"]]; //tabla bidireccional

        $correcto = true;

    ?>
    <?=$saludo ?>  <!--bloque eque imprime por pantalla directamente-->
    <?php
    echo "<br> ".$tabla[1];
    echo "<br> ".$tabla2[1][0];

    if ($correcto) {
        print "<p>Es correcto</p>";
    } else {
        print "<p> No es correcto</p>";
    }

    print $tabla[0]. " - ". $tabla[1];
    $tabla[]="     valor3"; //se añade al final de la trabla, "la posicion 2", para ponerlo en alguna posicion en especifico: $tabla[0]="valor3";
    print $tabla[2];

    //para borrar un valor
    unset($tabla[2]);
    print $tabla[2]; // sale un error por que no existe esa posicion ya que lo acabamos de borrar

    //numero de elementos
    echo "<br> Nº Elementos: ". count($tabla);

    $numeros = [1,2,3,4,5];
    echo "<br> MIN: ". min($numeros);
    echo "<br> MAX: ". max($numeros);

    //Ordenar La tabla
    sort($numeros);
    print_r($numeros);

    if (in_array(2, $numeros)) {
        print "\nEsta";
    }else {
        print "\nNo esta";
    }

    echo "<br>";
    shuffle($numeros);
    print_r($numeros); //print_r se utiliza para mostrar todo el contenido de una tabla

    echo "<br>";
    array_rand($numeros);
    print_r($numeros);

    define("PI",3.14); //defic¡nicion de una variable contante, que no cambia su valor
    echo "<br>". PI;

    print "<br>". PHP_INT_MAX;
    
    print "<pre>";
    print_r(get_defined_constants());
    print "</pre>";



    ?>
</body>
</html>