<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta alumnos</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "cursophp") or die("problemas de conexíon");

        $sql = "SELECT idAlumno, nombre mail, codigocurso FROM alumnos";

        $registros = mysqli_query($conexion, $sql) or die("Problema en la consulta: ". mysqli_error($conexion));

        while ($reg=mysqli_fetch_array($registros)){
            echo "IdAlumno: ". $reg['idAlumno'] . "<br>";
            echo "Nombre: ". $reg['nombre'];
        }

        mysqli_close($conexion);
    ?>
</body>
</html>