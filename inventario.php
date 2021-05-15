

<html>
 <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <title>Inventario</title>
 </head>
 <body>
 <div class="card-panel teal lighten-2 "><h1 class="center-align">Ingreso de Productos</h1> </div>
    
    <div align = "center">
    <fieldest>
      <legend>No. de Productos a Ingresar</legend>
      <form method="post" action="inventario.php" >
       <input type = "text" name = "cantproduct">
       <input type = "submit" name = "" value = "Ingresar datos">
      </form>
    </fieldest>

     <form method="post" action="regisproduct.php">
           <label>Ingrese nuevamente la cantidad de productos a ingresar</label>
            <input type = "text" name ="cantpr" />
            <br/><br/>
        <?php if(isset($_POST['cantproduct'])){?>
            <?php for ($i = 1; $i <= $_POST['cantproduct']; $i++ ){ ?>
            
            <label>Ingrese el nombre del Producto</label>
            <input type = "text" name ="product[]" />
            <br/><br/>
            <label>Ingrese el precio Unitario del Producto</label>
            <input type = "text" name = "precio[]" />
            <br/><br/>
            <label>Digite la cantidad de productos<label>
            <input type = "text" name = "cant[]"/>
            <br/><br/><br/><br/>
            <?php } ?>
        <?php } ?>
        <input type = "submit" vlaue = "Guardar"/>
     </form>
    </div>
    <script type="text/javascript" src ="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  </body>
</html>


