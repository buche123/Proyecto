<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="Css/inicios.css">
</head>
<body>
<?php
    
    
    include 'Menu.php';
    
    
?>
    
<section class="form1" action="inicios.php" method="post">
    <form>
        <span class="icon-user"></span>
        <input type="email" placeholder="Correo" name="email">
        <input type="password" placeholder="Contraseña" name="pass">
        <input type="submit" value="Enviar">
    </form>
    <p onclick="Mostrar();">Registrarse</p>
    -
    <p>Olvide mi contraseña</p>
</section>
    
    <script>
        function Mostrar(){
            
           var form2 = document.getElementById('form2');
            
            if(form2.className == "ocultar form2"){
               form2.className = "mostrar form2";
               }
            
        };
    </script>
    
   <div class="ocultar form2" id="form2">
   <br>
   <h1>Registrate</h1>
       <form  action="crud.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellidos" required>
        <input type="date" name="fecha" placeholder="Fecha de nacimiento" required>
        <select name="tipo_identificacion" class="select">
            <option>Seleccione</option>
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="TT">TT</option>
             <option value="Otro">Otro</option>
        </select>
        <input type="text" name="documento" placeholder="Numero de documento" required>   
        <input type="text" name="telefono" placeholder="Numero Telefonico" required>
        <input type="text" name="ciudad" placeholder="Ciudad" required>
        <input type="text" name="barrio" placeholder="Barrio" required>
        <input type="text" name="direccion" placeholder="Direccion" required>
        <input type="email" name="correo" placeholder="Correo electronico" required>  
            <input type="submit" name="Enviar" value="Enviar">
            <input type="reset">
       </form>
       
    
    
    </div>

</body>
</html>
