<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
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
      <a class="nav-link" href="#">Imagenes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Botones.php">Botones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./index.php">Tablas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Alertas.php">Alertas</a>
    </li>
  </ul>
  </nav>
    <br>

<div class="container jumbotron text-center">
    <h2>Trabajando con imagenes</h2>
</div>

<div class="container">
    <h3>Esquinas redondeadas</h2>
    <p>La clase .round agrega esquinas redondeadas a una imagen:</p>      
    <img src="./imagenes/foto1.jpg" class="rounded" alt="Dbz" title="Dbz" width="800" height="500"/> 
</div>

<div class="container">
    <h3>Imagen Circular</h2>
    <p>La clase de círculo redondeado da forma a la imagen en un círculo:</p>      
    <img src="./imagenes/foto2.jpg" class="rounded-circle" alt="Gohan, Goku y Gotenks" title="Gohan, Goku y Gotenks" width="400" height="600"/>
</div>

<div class="container">
    <h3>Imagen miniatura bordeada</h2>
    <p>La clase .img-thumbnail crea una miniatura de la imagen:</p>      
    <img src="./imagenes/foto3.jpg" class="img-thumbnail" alt="Gohan y Goku" title="Gohan y Goku" width="510" height="300"/>
</div>

<div class="container">
    <h3>Alinear imágenes</h2>
    <p>Haga flotar una imagen hacia la derecha con la clase .float-right o hacia la izquierda con .float-left:</p> 
    <img src="./imagenes/foto4.jpg" class="float-left" alt="Goku" title="Goku" width="500" height="300"/>   
    <img src="./imagenes/foto4.jpg" class="float-rigth" alt="Goku" title="Goku" width="500" height="300"/>
</div>

<div class="container">
    <h3>Imagen centrada</h2>
    <p>Centre una imagen agregando las clases de utilidad .mx-auto (margin: auto) y .d-block (display: block) a la imagen:</p> 
    <img src="./imagenes/foto4.jpg" class="mx-auto d-block" alt="Goku" title="Goku" width="500" height="300"/>   
</div> 

<div class="container">
  <br>
    <h3>Imagen como enlace a inicio</h2>
    <p>Para usar una imagen como enlace, coloque la etiqueta >img< dentro de la etiqueta >a< :</p>
    <a href="index.php">
     <img src="./imagenes/foto5.jpg" alt="Gohan" title="Ir a inicio" width="400" height="700"/>
    </a>
  </br>
</div> 

<div class="container">
  <br>
    <h3>Imagen como enlace a una pagina web</h2>
    <p>Para usar una imagen como enlace, coloque la etiqueta >img< dentro de la etiqueta >a< :</p>
    <a href="http://www.google.com">
     <img src="./imagenes/foto6.jpg" alt="Gohan y goku" title="Ir a GOOGLE" width="350" height="500"/>
    </a>
  </br>
</div> 

</body>
</html>