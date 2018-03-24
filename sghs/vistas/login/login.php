<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/login.css">
  <title>Document</title>

  <style>

  h1{text-align:center;

  }

  table{
    width:25%;
    background-color:#00FF00;
    border: 2px dotted 	#000000;
    margin:auto;}

    .izq{text-align:right;
    }

    .der{text-align:left;
    }

    td{
      text-align: center;
      padding: 10px;
    }

  };
  </style>
</head>
<body>

  <h1>Inciar sesion</h1>

  <form action="../../controladores/comprobar_login.php" method="post">

    <table>
      <tr>
        <td class="izq">
          Nombre:</td><td class="der"><input type"text" name="login" /></td></tr>
          <tr><td class="izq">Contraseña:<td class="der"><input type="password" name="password"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>


</body>
</html>
