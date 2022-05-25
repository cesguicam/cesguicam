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

<body style="background-color: #4cb9ac;">
<div class="container">

            <?php
            
            $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
            $familia = trim(htmlspecialchars($_REQUEST["familia"], ENT_QUOTES, "UTF-8"));
            $edad = trim(htmlspecialchars($_REQUEST["edad"], ENT_QUOTES, "UTF-8"));
            $tipo = trim(htmlspecialchars($_REQUEST["ID_tipo"], ENT_QUOTES, "UTF-8"));
            $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") or die("problemas de conexíon");

            $sql ="INSERT INTO animales(nombre, familia, edad, ID_tipo) VALUES ('$nombre','$familia','$edad','$tipo')";
//es el boton de ejecutar del workbench
            mysqli_query($conexion, $sql) or die("problemas en el insert: ".mysqli_error($conexion));
            mysqli_close($conexion);
            print"<h2>Your animal has been successfully inserted</h2>";
                    ?>
        <form method="post" action="consultar.php"><input type="submit" value="Consult" class="btn btn-primary btn-block"></form>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>