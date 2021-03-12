<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones</title>
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
      <a class="nav-link" href="#">Botones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Imagenes.php">Imagenes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./index.php">Tablas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Alertas.php">Alertas</a>
    </li>
  </ul>
 </nav>
</br>

<div class="container jumbotron text-center">
  <h2>Trabajando con Botones</h2>
</div>

<div class="container jumbotron text-center">
  <h3>Estilos de botones</h3>
</div>
<div class="container jumbotron">
  <p>Bootstrap 4 proporciona diferentes estilos de botones:</p>
    <button type="button">Boton</button>
    <button type="button" class="btn">Basic</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-link">Link</button>      
</div>

<div class="container text-center">
  <h3>Elementos del botones</h3>
</div>
<div class="container jumbotron">
    <p>Las clases de botones se pueden usar en elementos >a<, >button< o >input<:</p>
    <a href="#" class="btn btn-info" role="button">Link Button</a>
    <button type="button" class="btn btn-info">Button</button>
    <input type="button" class="btn btn-info" value="Input Button">
    <input type="submit" class="btn btn-info" value="Submit Button">
</div>

<div class="container text-center">
  <h3>Tipos de botones</h3>
</div>
<div class="container jumbotron">
  <p>Bootstrap 4 proporciona ocho botones de contorno / bordeados:</p>
    <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    <button type="button" class="btn btn-outline-light text-dark">Light</button>    
</div>

<div class="container text-center">
  <h3>Tamaños de botones</h3>
</div>
<div class="container jumbotron">
  <p>Utilice la clase .btn-lg para botones grandes o la clase .btn-sm para botones pequeños:</p>
    <button type="button" class="btn btn-primary btn-lg">Grande</button>
    <button type="button" class="btn btn-primary">Por defecto</button>
    <button type="button" class="btn btn-primary btn-sm">Pequeño</button>  
</div>

<div class="container text-center">
  <h3>Botones de nivel de bloque pequeño</h3>
</div>
<div class="container jumbotron">
  <p>Agregue la clase .btn-block para crear un botón de nivel de bloque que abarque todo el ancho del elemento principal:</p>
      <button type="button" class="btn btn-primary btn-sm btn-block">Boton 1</button>
      <p></p>
      <button type="button" class="btn btn-success btn-sm btn-block">Boton 2</button>  
    <h4>Botones de nivel de bloque por defecto</h4>  
      <button type="button" class="btn btn-primary btn-block">Button 1</button>
      <p></p>
      <button type="button" class="btn btn-success btn-block">Button 2</button>
    <h4>Botones de nivel de bloque grande</h4>
      <button type="button" class="btn btn-primary btn-lg btn-block">Boton 1</button>
      <p></p>
      <button type="button" class="btn btn-success btn-lg btn-block">Boton 2</button>
</div>

<div class="container text-center">
  <h3>Estados de los botones</h3>
</div>
<div class="container jumbotron">
  <p>Un botón se puede establecer en un estado activo (parecer presionado) o deshabilitado (no se puede hacer clic):</p>
  <button type="button" class="btn btn-primary">Primary Button</button>
  <button type="button" class="btn btn-primary active">Activado Primary</button>
  <button type="button" class="btn btn-primary" disabled>Desactivado Primary</button>
  <a href="#" class="btn btn-primary disabled">Desactivado Link</a>
  <p>La clase .active hace que un botón aparezca presionado, y el atributo disabled hace que no se pueda hacer clic en un botón. Tenga en cuenta que los elementos <a> no admiten el atributo disabled y, por lo tanto, deben usar la clase .disabled para que aparezca visualmente deshabilitado.</p>
</div>

<div class="container text-center">
  <h3>Botones giratorios</h3>
</div>
<div class="container jumbotron">
  <p>También puede agregar "giratorios" a un botón, sobre el que obtendrá más información en nuestro Tutorial de botones giratorios BS4:</p>
    <button type="button" class="btn btn-outline-primary">Primary
    <span class="spinner-border spinner-border-sm"></span>
    </button>
    <button type="button" class="btn btn-outline-secondary">
    <span class="spinner-grow spinner-grow-sm"></span>
  Loading..
    </button>
    <button type="button" class="btn btn-outline-success disabled">
    <span class="spinner-border spinner-border-sm"></span>
  Loading..
    </button>
    <button type="button" class="btn btn-outline-info disabled">
    <span class="spinner-grow spinner-grow-sm"></span>
  Loading..
    </button>
    <button type="button" class="btn btn-outline-warning">Warning
    <span class="spinner-border spinner-border-sm"></span>
    </button>
    <button type="button" class="btn btn-outline-danger">
    <span class="spinner-grow spinner-grow-sm"></span>
  Loading..
    </button>
    <button type="button" class="btn btn-outline-dark disabled">
    <span class="spinner-border spinner-border-sm"></span>
  Loading..
    </button>
    <button type="button" class="btn btn-outline-light text-dark disabled">
    <span class="spinner-grow spinner-grow-sm"></span>
  Loading..
    </button>    
</div>
<p></p>

</body>
</html>