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

<body   style="background-color: #4cb9ac;">
<div class="container" >
        <h2>Insertar Animal</h2>
        <form method="post" action="insertar2.php">
           
        <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            
            <div class="form-group">
                <label for="familia">Familia</label>
                <input type="text" class="form-control" name="familia" id="familia">
            </div>
            
            <div class="form-group">
                <label for="email">Edad</label>
                <input type="number" class="form-control" name="edad" id="edad">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="ID_tipo" class="form-control" id="tipo">
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "examenphp") 
                                    or die("Problemas de Conexión");

                    $sql = "SELECT ID_tipo, tipo FROM tipos";

                    $registros = mysqli_query($conexion, $sql) 
                            or die("Problemas en select:".mysqli_error($conexion));

                    while($reg=mysqli_fetch_array($registros)) {
                        echo "<option value='$reg[ID_tipo]'> $reg[tipo] </option>";
                    }
                    ?>
                </select>
            </div>
                    <br>
            <input type="submit" value="Insertar" class="btn btn-primary btn-block">
            <br>
        </form>
        <br>
        <form method="post" action="consultar.php"><input type="submit" value="Consultar" class="btn btn-primary btn-block"></form>
                    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>