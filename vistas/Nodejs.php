<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exam</title>
    <link rel="stylesheet" href="mains.css">
</head>
<?php
function clickMes(){
  ob_start();
    $_SESSION['n1m']=0;
    
    
  }
     ?>
<body>
    <div id="menus">
        <ul>
            <button href="home.php" onclick="clickMe()">
        
            <script>
  function clickMe(){
    <?php echo clickMes(); ?>;
    location.reload(true);
  }
</script>
            <li>Home</li>
            </button>
            <img src="Group 1.png" alt="">
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section id="bien">
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>

</body>
</html>