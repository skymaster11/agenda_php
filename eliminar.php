<?php include("includes/conexion.php");


if(isset($_GET['id'])){

    $id = $_GET['id'];



    $query = "DELETE FROM personas WHERE id_agenda = '$id'";

    $resultado = mysqli_query($conn, $query);

    if (!$resultado){

        die("Query Failed");

      }


      header("Location: index.php");
    }
?>