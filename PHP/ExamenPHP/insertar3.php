<!DOCTYPE html>
<html lang="en">

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

            <?php
            $ID_animal = trim(htmlspecialchars($_REQUEST["ID_animal"], ENT_QUOTES, "UTF-8"));
            $continente = trim(htmlspecialchars($_REQUEST["continente"], ENT_QUOTES, "UTF-8"));
            $region = trim(htmlspecialchars($_REQUEST["region"], ENT_QUOTES, "UTF-8"));
            $dieta = trim(htmlspecialchars($_REQUEST["dieta"], ENT_QUOTES, "UTF-8"));
            $domestico = trim(htmlspecialchars($_REQUEST["domestico"], ENT_QUOTES, "UTF-8"));
            
            $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");


            $sql ="INSERT INTO habitat(ID_animal, continente, region, dieta, domestico) VALUES ('$ID_animal','$continente','$region','$dieta','$domestico')";
//es el boton de ejecutar del workbench
/*if ($nombre2 == "") {
    $insertar = "insert into usuarios (nombre,dni,correo) VALUES ('$nombre','$apellidos','$correo')";
}else if ($nombre == "" || $nombre2 == "$nombre2") {
    $insertar = "insert into coche (dni,nombrecoche,precio) VALUES ('$nombre2','$apellidos2','$correo2')";

}else if ($nombre == "$nombre" || $nombre2 == "$nombre2") {
    $insertar = "insert into usuarios (nonmbre,apellidos,correo) VALUES ('$nombre','$apellidos','$correo') and
    insert into coche (idusu,nombrecoche,precio) VALUES ('$nombre2','$apellidos2','$correo2');";
}*/
            mysqli_query($conexion, $sql) or die("problemas en el insert: ".mysqli_error($conexion));
            mysqli_close($conexion);
            print"<h2>Se ha insertado con exito su habitat</h2>";
                    ?>
        <form method="post" action="consultar3.php"><input type="submit" value="Consultar habitat" class="btn btn-primary btn-block"></form>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>