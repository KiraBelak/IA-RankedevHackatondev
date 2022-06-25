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

    <section id="bien">
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>

    <scroll>
<!-- @NOTE: the onclicks are used for touch devices since I'm lazy and didnt use <a> tags -->
<div class="Menu">
  <div class="Division">
<p>
&mdash; Certificación &mdash;
  <span>
    Front End
  </span>
</p>
</div>
  <ul class="Menu-list" data-offset="10">
    <li class="Menu-list-item" data-offset="20" onclick>
      NodeJs
      <span class="Mask"><span>NodeJs</span></span>
      <span class="Mask"><span>NodeJs</span></span>
    </li>
    <li class="Menu-list-item" data-offset="16" onclick>
      Javascript
      <span class="Mask"><span>Javascript</span></span>
      <span class="Mask"><span>Javascript</span></span>
    </li>
    <li class="Menu-list-item" data-offset="12" onclick>
      React
      <span class="Mask"><span>React</span></span>
      <span class="Mask"><span>React</span></span>
    </li>
    <li class="Menu-list-item" data-offset="8" onclick>
      Angular
      <span class="Mask"><span>Angular</span></span>
      <span class="Mask"><span>Angular</span></span>
    </li>
    <li class="Menu-list-item" data-offset="8" onclick>
      Swift
      <span class="Mask"><span>Swift</span></span>
      <span class="Mask"><span>Swift</span></span>
    </li>
  </ul>
</div>

<div class="Menu">
  <div class="Division">
<p>
&mdash; Certificación &mdash;
  <span>
    Back End
  </span>
</p>
</div>
  <ul class="Menu-list" data-offset="10">
    <li class="Menu-list-item" data-offset="20" onclick>
      Javascript
      <span class="Mask"><span>Javascript</span></span>
      <span class="Mask"><span>Javascript</span></span>
    </li>
    <li class="Menu-list-item" data-offset="16" onclick>
      Python
      <span class="Mask"><span>Python</span></span>
      <span class="Mask"><span>Python</span></span>
    </li>
    <li class="Menu-list-item" data-offset="12" onclick>
      PHP
      <span class="Mask"><span>PHP</span></span>
      <span class="Mask"><span>PHP</span></span>
    </li>
    <li class="Menu-list-item" data-offset="8" onclick>
      Java
      <span class="Mask"><span>Java</span></span>
      <span class="Mask"><span>Java</span></span>
    </li>
  </ul>
</div>    
</scroll>
</body>

</html>