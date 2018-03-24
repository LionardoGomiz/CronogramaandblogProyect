<<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  try{

    require('../modelos/Conexion.php');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";

    $resultado=$base->prepare($sql);

    $login=htmlentities(addslashes($_POST["login"]));

    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);

    $resultado->bindValue(":password", $password);

    $resultado->execute();

    $numero_registro=$resultado->rowCount ();

    if ($numero_registro!=0) {

      session_start();

      $_SESSION["usuario"]=$_POST["login"];

      header("Location:../vistas/panel_de_control/panel_admin.php");

    }else{

      header("location:../vistas/login/login.php");
    }

  }catch (Exception $e){

    die("Error: " . $e->getMessage ());

  }

   ?>

</body>
</html>
