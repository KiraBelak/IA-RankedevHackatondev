<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="mains.css">
</head>
<body>
    <div id="menus">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>


<!-- @NOTE: the onclicks are used for touch devices since I'm lazy and didnt use <a> tags -->
<div class="Menu">
  <ul class="Menu-list" data-offset="10">
    <li class="Menu-list-item" data-offset="20" onclick>
      Home
      <span class="Mask"><span>Home</span></span>
      <span class="Mask"><span>Home</span></span>
    </li>
    <li class="Menu-list-item" data-offset="16" onclick>
      About
      <span class="Mask"><span>About</span></span>
      <span class="Mask"><span>About</span></span>
    </li>
    <li class="Menu-list-item" data-offset="12" onclick>
      Work
      <span class="Mask"><span>Work</span></span>
      <span class="Mask"><span>Work</span></span>
    </li>
    <li class="Menu-list-item" data-offset="8" onclick>
      Contact
      <span class="Mask"><span>Contact</span></span>
      <span class="Mask"><span>Contact</span></span>
    </li>
  </ul>
</div>

    
</body>

</html>