<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
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
      <a class="nav-link" href="#">Tablas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Imagenes.php">Imagenes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Botones.php">Botones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Alertas.php">Alertas</a>
    </li>
  </ul>
  </nav>
    <br>

    <div class="container">
    <h1>Ejemplo de proyecto en repositorio </h1>
    <h2>Hola este es mi ejemplo trabajando con tablas</h2>
    <h3>Tabla Basica</h3>
    <p>La clase .table agrega un estilo básico (relleno ligero y divisores horizontales) a una tabla</p>  
    <h4>Ejemplo con th</h3>
<table class="table">         
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>

      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>

      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>  

<div class="container"> 
<h2>Filas con rayas</h2>
<p>La clase .table-striped agrega rayas de cebra a la tabla:</p>  
<table class="table table-striped">       
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>

      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>

      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>  

<div class="container"> 
<h2>Tabla bordeada</h2>
<p>La clase .table-bordered agrega bordes en todos los lados de la tabla y las celdas:</p>  
<table class="table table-bordered">        
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>

      <tr>
        <td>Paulina</td>
        <td>Mendoza Ortega</td>
        <td>21</td>
      </tr>

      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>  

<div class="container"> 
<h2>Filas flotantes</h2>
<p>La clase .table-hover agrega un efecto de desplazamiento (color de fondo gris) en las filas de la tabla:</p>  
<table class="table table-hover">       
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>

      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>

      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div> 

<div class="container"> 
<h2>Tabla Oscura</h2>
<p>La clase .table-dark agrega un fondo negro a la tabla:</p>  
<table class="table table-dark">     
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>  

<div class="container"> 
<h2>Tabla con rayas oscuras</h2>
<p>Combine .table-dark y .table-striped para crear una mesa oscura con rayas:</p>  
<table class="table table-dark table-striped">   
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>

<div class="container"> 
<h2>Tabla sin bordes</h2>
<p>La clase .table-borderless elimina los bordes de la tabla:</p>  
<table class="table table-borderless">       
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>

<div class="container"> 
<h2>Clases contextuales</h2>
<p>Las clases contextuales se pueden utilizar para colorear la tabla, las filas de la tabla o las celdas de la tabla. Las clases que se pueden utilizar son: 
- .table-primary, 
- .table-success, 
- .table-info, 
- .table-warning, 
- .table-danger, 
- .table-active, 
- .table-secundaria, 
- .table-light  
- .table -oscuro:</p>  
<table class="table">        
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr class="table-primary">
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr class="table-success">
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
      <tr class="table-danger">
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr class="table-info">
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
      <tr class="table-warning">
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr class="table-active">
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr class="table-secondary">
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr class="table-light">
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
      <tr class="table-dark text-ligth">
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
  </table>
</div>

<div class="container"> 
<h2>Colores de encabezado de la tabla </h2>
<p>La clase .thead-dark agrega un fondo negro a los encabezados de las tablas y la clase .thead-light agrega un fondo gris a los encabezados de las tablas.:</p>  
<table class="table">   
    <thead class="table-dark text-ligth">    
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
    </thead> 
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>

  <table class="table">     
    <thead class="table-secondary text-dark">      
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
      </tr>
    </thead> 
      <tr>
        <td>Miguel Angel</td>
        <td>Castro Martinez</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Octavio</td>
        <td>Castillo</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>22</td>
      </tr>
  </table>
</div>

<div class="container"> 
<h2>Tabla pequeña</h2>
<p>La clase .table-sm hace que la tabla sea más pequeña al cortar el relleno de la celda a la mitad:</p>  
<table class="table table-bordered table-sm">       
      <tr>
          <th>#</th>
          <th>Nombre(s)</th>
          <th>Primer Apellido</th>
          <th>Segundo Apellido</th>
          <th>Edad</th>
          <th>Munipio</th>
          <th>Pais</th>
          <th>Sexo</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Miguel Angel</td>
        <td>Castro</td>
        <td>Martinez</td>
        <td>19</td>
        <td>San Jose Miahuatlan</td>
        <td>Mexico</td>
        <td>Masculino</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Humberto</td>
        <td>Zarate</td>
        <td>Zarate</td>
        <td>22</td>
        <td>San Pedro Tetitlan</td>
        <td>Mexico</td>
        <td>Masculino</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Paulina</td>
        <td>Mendiola</td>
        <td>Ortega</td>
        <td>19</td>
        <td>Cordoba</td>
        <td>Mexico</td>
        <td>Femenino</td>
      </tr>
  </table>
</div> 
</body>
</html>