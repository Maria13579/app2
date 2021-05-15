

<html>
 <head>
  <title>Inventario</title>
 </head>
 <body>
    <div align="center">
      <h1>Registrar Productos</h1>
    </div>
    <div align = "center">
    <fieldest>
      <legend>No. de Productos a Ingresar</legend>
      <form method="post" action="inventario.php" >
       <input type = "text" name = "cantproduct">
       <input type = "submit" name = "" value = "Generar">
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
  </body>
</html>


