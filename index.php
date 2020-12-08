<?php
       if(isset($_POST['submit'])){
           $usuario = $_POST['usuario'];
           $password = $_POST['password'];
       }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="formulario" method="post">
       <h1 class="title-form">Formulario</h1>
<?php
       include("validar.php");
?>
       <label for="" class="title-user">Usuario:</label>
       <input type="text" name="usuario" placeholder="example@gmai.com" class="user"> 
       <label for="" class="title-pass">Password:</label>
       <input type="password" name="password" placeholder="**********" class="pass">
       <input type="submit" name="submit" value="Enviar" class="btn">
    </form>
</body>
</html>