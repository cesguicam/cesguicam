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

<body style="background-color: #4cb9ac;">
<div class="container" >
        <h2>Su Consulta</h2>
        <?php
        
            $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");
            $opcion = $_REQUEST['selecto'];

            if($opcion == '1'){
                $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

                $sql = "SELECT a.*, t.tipo FROM animales a JOIN tipos t ON a.ID_tipo=t.ID_tipo where t.ID_tipo=$opcion;";

                $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));
                 echo "<table class='table'>";  

                 echo"<thead><th>ID_animal</th><th>Nombre</th><th>Familia</th><th>Edad</th><th>ID_Tipo</th><th>Tipo</th></thead>";
                while ($reg=mysqli_fetch_array($registros)){
                 echo "<tr>";
                    echo "<td>". $reg['ID_animal'] . "</td>";
                    echo "<td>". $reg['nombre'] . "</td>";
                    echo "<td>". $reg['familia'] . "</td>";
                    echo "<td>". $reg['edad'] . "</td>";
                    echo "<td>". $reg['ID_tipo'] . "</td>";
                    echo "<td>". $reg['tipo'] . "</td>";
                    echo "</tr>";
       
    }
                  echo "</table>";
                  mysqli_query($conexion, $sql) or die("problemas en el insert: ".mysqli_error($conexion));
            mysqli_close($conexion);

            }else if($opcion == '2'){
                $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

                $sql = "SELECT a.*, t.tipo FROM animales a JOIN tipos t ON a.ID_tipo=t.ID_tipo where t.ID_tipo=$opcion;";

                $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));
                 echo "<table class='table'>";  

                 echo"<thead><th>ID_animal</th><th>Nombre</th><th>Familia</th><th>Edad</th><th>ID_Tipo</th><th>Tipo</th></thead>";
                while ($reg=mysqli_fetch_array($registros)){
                 echo "<tr>";
                    echo "<td>". $reg['ID_animal'] . "</td>";
                    echo "<td>". $reg['nombre'] . "</td>";
                    echo "<td>". $reg['familia'] . "</td>";
                    echo "<td>". $reg['edad'] . "</td>";
                    echo "<td>". $reg['ID_tipo'] . "</td>";
                    echo "<td>". $reg['tipo'] . "</td>";
                    echo "</tr>";
       
    }
                  echo "</table>";
                  mysqli_query($conexion, $sql) or die("problemas en el insert: ".mysqli_error($conexion));
            mysqli_close($conexion);

            }else if($opcion == '3'){
                $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

                $sql = "SELECT a.*, t.tipo FROM animales a JOIN tipos t ON a.ID_tipo=t.ID_tipo where t.ID_tipo=$opcion;";

                $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));
                 echo "<table class='table'>";  

                 echo"<thead><th>ID_animal</th><th>Nombre</th><th>Familia</th><th>Edad</th><th>ID_Tipo</th><th>Tipo</th></thead>";
                while ($reg=mysqli_fetch_array($registros)){
                 echo "<tr>";
                    echo "<td>". $reg['ID_animal'] . "</td>";
                    echo "<td>". $reg['nombre'] . "</td>";
                    echo "<td>". $reg['familia'] . "</td>";
                    echo "<td>". $reg['edad'] . "</td>";
                    echo "<td>". $reg['ID_tipo'] . "</td>";
                    echo "<td>". $reg['tipo'] . "</td>";
                    echo "</tr>";
       
    }
                  echo "</table>";
                  mysqli_query($conexion, $sql) or die("problemas en el insert: ".mysqli_error($conexion));
            mysqli_close($conexion);

            }

        
        ?>
        <form method="post" action="condicion.php">           
            <br>
            <input type="submit" value="Otra consulta" class="btn btn-primary btn-block"><br><br><button type="button" class="btn btn-success"><a href="index.html" style="text-decoration: none; color: white;">Página principal</a></button>
            <br>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>