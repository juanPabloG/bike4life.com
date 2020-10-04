<?php
  
  include 'conexion_be.php';

  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $query = "INSERT INTO   usuarios(nombre_completo, correo, contraseña)
            VALUES('$nombre_completo','$correo', '$contrasena')";

 $ejecutar = mysqli_query($conexion, $query);

 if($ejecutar){
   echo '
      <script>
          alert("Usuario Resguistrado Correctamente");
          window.location = "../index.html";
      </script>
   ';
   
 }else {
   echo'
    <script>
      alert("Intentalo de nuevo Usurio no Registrado");
      window.location = "../index.html";
     </script>
 
 ';
 }
 mysqli_close ($conexion);

?>