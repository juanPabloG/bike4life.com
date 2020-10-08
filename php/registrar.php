
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado del registro</title>
</head>
<body>
<?php
    include ("con_db.php");

    $Full_name = $_POST['Full_name'];
    $Email = trim($_POST['Email']);
    $Passwd = trim($_POST['Passwd']);
    $Fecha_registro = date("m/d/y");

    $consulta = "INSERT INTO tbl_registro(Fecha_registro, Full_name, Email, Passwd) VALUES ('$Fecha_registro','$Full_name','$Email','$Passwd')";

    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
        echo "Registro satisfactorio";
    } else {
        echo "Registro fallido";
    }

?>
    </body>
</html>
