
<?php
  $producto = $_POST['product'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cant'];
  $cp= $_POST['cantpr'];

?>
<html>
    <head>
     <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    </head>
    <body>
    <div class="card-panel teal lighten-2 "><h1 class="center-align">Inventario </h1> </div>
        <table border ="1">
            <thead>
              <tr>
                 <th>Producto</th>
                 <th>Precio unitario</th>
                 <th>Cantidad de Productos</th>
              </tr>
            </thead>

            <tbody >
                 <tr>

                    <td><?php foreach($producto as $p){echo  "<br>". $p;
                    }?></td>
                    <td><?php  foreach($precio as $pr){echo"<br>". $pr;
                    }?></td>
                    <td><?php  foreach($cantidad as $c){echo "<br>".$c;
                    }
                    ?></td>
                 </tr>

            </tbody  >
            <form method="post" action="regisproduct.php">
              <input class="waves-effect waves-light btn " type= "submit" value="Eliminar">
              <input type = "text" name = "proaeliminar"  placeholder="Ingrese el nombre del producto a eliminar"/>
            </form>
             <script type="text/javascript" src ="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </body>

</html>