<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras</title>
    <style>
.rojo{
    color: red;
}
.verde{
    color: green;
}
.azul{
    color: blue;
}
table, tr,td {
    border: 2px solid black;
}
    </style>

</head>
<body>
    <?php
    $aleatorio = rand(1,10);
    if($aleatorio<5){
        echo "<p class='rojo'> el valor $aleatorio es menor que 5 </p>";
    } else if ($aleatorio > 5){
    echo "<p class='verde'> el valor $aleatorio es mayor que 5 </p>";

    } else {
    echo "<p class='azul'> el valor $aleatorio es  5 </p>";
    }

    
    for ($i=0; $i < 6 ; $i = $i + 2) { 
        echo "<p>$i</p>";
    }
    echo "<hr><br><br>";
    for ($i=6; $i > 0 ; $i--) { 
        echo "<p>$i</p>";
    }
    echo "<hr><br><br>";
    for ($i=6; $i > 0 ; $i--) { 
        if ($i % 2 == 0){
            echo "<p>$i</p>";
        }
      
    }
$filas = 3;
$columnas = 4;

echo "<table>";
for ($i=0 ; $i < $filas ; $i++) { 
    echo "<tr>";
    for ($j=0; $j < $columnas; $j++) { 
       echo "<td> $i-$j </td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "<br><br><br><br><br><br>";


  
  $hora = date('H'); 
  if (($hora >= 0) && ($hora < 6)) 
  { 
    $mensaje = "Buena madrugada"; 
  } 
  else if (($hora >= 6) && ($hora < 12)) 
  { 
    $mensaje = "Buenos dias"; 
  } 
  else if (($hora >= 12) && ($hora < 18)) 
  { 
    $mensaje = "Buenas tardes"; 
  } 
  else
  { 
  $mensaje = "Buenas noches"; 
  } 
 echo "$mensaje";
 echo "$hora";

    ?>
</body>
</html>