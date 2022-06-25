<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exam</title>
    <link rel="stylesheet" href="mains.css">
</head>

<body>
    <div id="menus">
        <ul>
            <a href="home.php">
            <li>Home</li>
            </a>
            <img src="Group 1.png" alt="">
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section id="bien">
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>

</body>
</html>