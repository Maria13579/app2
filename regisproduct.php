
<?php
  $producto = $_POST['product'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cant'];
  $cp= $_POST['cantpr'];

?>
<html>
    <head>
    </head>
    <body>
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

                    <td><?php foreach($producto as $p){echo "<br>". $p;
                    }?></td>
                    <td><?php  foreach($precio as $pr){echo"<br>". $pr;
                    }?></td>
                    <td><?php  foreach($cantidad as $c){echo "<br>".$c;
                    }
                    ?></td>
                 </tr>

            </tbody  >
    </body>

</html>