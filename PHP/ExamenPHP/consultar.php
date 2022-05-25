<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body style="background-color: #4cb9ac;">
    <div class="container">
          <h2>list all</h2>

          <?php
    $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

    $sql = "SELECT a.ID_animal, a.nombre, a.familia, a.edad, a.ID_tipo, t.tipo FROM animales a LEFT JOIN tipos t ON a.ID_tipo=t.ID_tipo";

    $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));
    echo "<table class='table'>";  
  
      echo"<thead><th>ID_animal</th><th>Name</th><th>Family</th><th>Age</th><th>ID_Tipo</th><th>Type</th></thead>";
    while ($reg=mysqli_fetch_array($registros)){
        echo "<tr>";
        echo "<td>". $reg['ID_animal'] . "</td>";
        echo "<td>". $reg['nombre'] . "</td>";
        echo "<td>". $reg['familia'] . "</td>";
        echo "<td>". $reg['edad'] . "</td>";
        echo "<td>". $reg['ID_tipo'] . "</td>";
        echo "<td>". $reg['tipo'] . "</td>";
        echo "<td>" . "<a href='actualizar.php?ID_animal=$reg[ID_animal]' class='btn btn-primary btn-sm'>Update</a>
        <a href='borrar.php?ID_animal=$reg[ID_animal]' class='btn btn-danger btn-sm'>Delete</a>" . "</td>";
        echo "</tr>";
       
    }
    echo "</table>";
    mysqli_close($conexion);
?>
<br>
<button type="button" class="btn btn-success"><a href="index.html" style="text-decoration: none; color: white;">Homepage</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>