<?php include("includes/conexion.php");


        if(isset($_POST['ingresar'])){
            
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];


            $query = "INSERT INTO personas (nombre,correo,telefono) 
            VALUES('$nombre','$correo', '$telefono')";
            $resultado = mysqli_query($conn, $query);
        
            if(!$resultado){
                die("Error al registrar");   
            }
             
            header("location: index.php");
            }
?>