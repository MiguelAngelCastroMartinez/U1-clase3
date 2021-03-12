<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertas</title>
</head>
<body>

<div class="jumbotron text-center">
        <h1>Semana 3 trabajando con bootstrap</h1>
        <p>Este sitio incluye Bootstrap y es un ejemplo de diseño responsive</p>
</div>  
<br>
<nav class="navbar navbar-expand-sm bg-dark">

 <!-- Links -->
 <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="#">Alertas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Botones.php">Botones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./index.php">Tablas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Imagenes.php">Imagenes</a>
    </li>
  </ul>
  </nav>
    <br>

  <div class="container jumbotron text-center">
    <h2>Trabajando con Alertas</h2>
  </div>

<div class="container jumbotron text-center">
  <h3>Tipos de alerta</h3>
</div>
<div class="container jumbotron">
      <p>Las alertas se crean con la clase .alert, seguidas de clases de colores contextuales:</p>
    <div class="alert alert-success">
      <strong>Success!</strong> Este cuadro de alerta podría indicar una acción exitosa o positiva.
    </div>
    <div class="alert alert-info">
      <strong>Info!</strong> Este cuadro de alerta podría indicar un cambio o acción informativa neutral.
    </div>
    <div class="alert alert-warning">
      <strong>Warning!</strong> Este cuadro de alerta podría indicar una advertencia que podría necesitar atención.
    </div>
    <div class="alert alert-danger">
      <strong>Danger!</strong> Este cuadro de alerta podría indicar una acción peligrosa o potencialmente negativa.
    </div>
    <div class="alert alert-primary">
      <strong>Primary!</strong> Indica una acción importante.
    </div>
    <div class="alert alert-secondary">
      <strong>Secondary!</strong> Indica una acción un poco menos importante.
    </div>
    <div class="alert alert-dark">
      <strong>Dark!</strong> Alerta gris oscuro.
    </div>
    <div class="alert alert-light">
      <strong>Light!</strong> Alerta gris claro.
    </div>
    <p>Las alertas se crean con la clase .alert, seguida de una de las clases contextuales .alert-success, .alert-info, .alert-warning, .alert-danger, .alert-primary, .alert-secundaria, .alert-light o .alert-dark.</p>
 </div>

<div class="container jumbotron text-center">
  <h3>Enlaces de alerta</h3>
</div>
<div class="container jumbotron">
  <p>Agregue la clase de enlace de alerta a cualquier enlace dentro del cuadro de alerta para crear "enlaces de colores coincidentes".</p>
    <div class="alert alert-success">
      <strong>Success!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-info">
      <strong>Info!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-warning">
      <strong>Warning!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-danger">
      <strong>Danger!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-primary">
      <strong>Primary!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-secondary">
      <strong>Secondary!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-dark">
      <strong>Dark!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
    <div class="alert alert-light">
      <strong>Light!</strong> Tienes que <a href="#" class="alert-link">leer este mensaje</a>.
    </div>
</div>

<div class="container jumbotron text-center">
  <h3>Alertas de cierre</h3>
</div>
<div class="container jumbotron">
  <p>El botón con class = "close" y data-dispats = "alert" se usa para cerrar el cuadro de alerta.</p>
  <p>La clase de alerta descartable agrega algo de relleno adicional al botón de cierre.</p>
  <div class="alert alert-success alert-dismissible">
    <strong>Success!</strong> Indicates a successful or positive action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-info alert-dismissible">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-warning alert-dismissible">
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-danger alert-dismissible">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-primary alert-dismissible">
    <strong>Primary!</strong> Indicates an important action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-secondary alert-dismissible">
    <strong>Secondary!</strong> Indicates a slightly less important action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-dark alert-dismissible">
    <strong>Dark!</strong> Dark grey alert.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-light alert-dismissible">
    <strong>Light!</strong> Light grey alert.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
</div>

<div class="container jumbotron text-center">
  <h3>Alertas animadas</h3>
</div>
<div class="container jumbotron">
  <p>Las clases .fade y .show agregan un efecto de desvanecimiento al cerrar el mensaje de alerta.</p>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-info alert-dismissible fade show">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-danger alert-dismissible fade show">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-primary alert-dismissible fade show">
    <strong>Primary!</strong> Indicates an important action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-secondary alert-dismissible fade show">
    <strong>Secondary!</strong> Indicates a slightly less important action.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-dark alert-dismissible fade show">
    <strong>Dark!</strong> Dark grey alert.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
  <div class="alert alert-light alert-dismissible fade show">
    <strong>Light!</strong> Light grey alert.
    <strong type="button" class="close" data-dismiss="alert">&times;</strong>
  </div>
</div>
</body>
</html>