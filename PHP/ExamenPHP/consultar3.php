<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" action="insertar.php">Insertar33</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Featuresliwefgliuwgfieugfweuifgwieufgui</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <h2>Consultar</h2>

          <?php
    $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

    $sql = "SELECT * FROM habitat";

    $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));
    echo "<table class='table'>";  
  
      echo"<thead><th>ID_animal</th><th>Continente</th><th>Region</th><th>Dieta</th><th>Domestico</th></thead>";
    while ($reg=mysqli_fetch_array($registros)){
        echo "<tr>";
        echo "<td>". $reg['ID_animal'] . "</td>";
        echo "<td>". $reg['continente'] . "</td>";
        echo "<td>". $reg['region'] . "</td>";
        echo "<td>". $reg['dieta'] . "</td>";
        echo "<td>". $reg['domestico'] . "</td>";
        echo "<td>" . "<a href='actualizar.php?idAlumno=$reg[ID_animal]' class='btn btn-primary btn-sm'>Actualizar</a>
                               <a href='borrar.php?idAlumno=$reg[ID_animal]' class='btn btn-danger btn-sm'>Borrar</a>" . "</td>";
            echo "</tr>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conexion);
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>