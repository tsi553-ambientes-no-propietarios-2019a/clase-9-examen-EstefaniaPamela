<!DOCTYPE html>
<html lang="en">

<head>
5
 <title>Registrar Usuario</title>

 <meta charset = "utf-8">

</head>

 
<?php
//include('common/utils.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center><h1>Login</h1></center>
    <center>
    <form action="php/process_login.php" method="post">
        <input type="text" name="username" placeholder="Usuario">
        <br/><br/>
        <input type="password" name="password" placeholder="Clave">
        <br/><br/>
        <button>Ingresar</button>
        <br/><br/>
        <a href="registro.php"> Registrate </a>
        <br/><br/>
    </form>

</body>
</html>
