
<?php

ob_start();
$_SESSION['n1m']=0;
echo $_SESSION['n1m'];
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="" method="POST" >
    <div id="errorl">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        </div>
        <img src="Group 1.png" id="logo">
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
        <?php
         ?>
    </form>
    <footer>
   
  <img src="ailab.png" alt="">
  <img src="Group 1.png" alt="" id="logof">
  <img src="hackly.png" alt="">
  <img src="micro.png" alt="" id="micro">
</footer>
</body>

</html>