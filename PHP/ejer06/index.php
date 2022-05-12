<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>INSERTAR ALUMNO</h2>
        <form method="post" action="insertar.php">
            <div class="form-group">
                <label for="nombre">Nombre Alumno </label>
                <input type="text" name="nombre" id="nombre" autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="curso">Curso </label>
                <select name="curso" id="curso" class="form-control">
                  <?php
                  $conexion = mysqli_connect("localhost", "root", "ANNHFWU2K", "cursophp") or die("problemas de conexíon");

                  $sql = "SELECT idCurso, nombreCurso FROM cursos";

                  $registros=mysqli_query($conexion, $sql) or die ("Problemas en Select: ". mysqli_error($conexion));
                  while($reg=mysqli_fetch_array($registros)) {
                    echo "<option value='$reg[idCurso]'> $reg[nombreCurso]</option>";
                  }
                  ?>
                </select>
                <input type="submit" value="Insertar" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>


  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>