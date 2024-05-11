<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <form method="post">
        <h2>CasaPlus</h2>
        <h4>Juntos hacemos realidad tus sueños de hogar</h4>
            <div class="input-w">
                <input type="text" name="name" placeholder="Nombre">
            </div>
            <div class="input-w">
                <input type="text" name="lastname" placeholder="Apellido">
            </div>
            <div class="input-w">
                <input type="email" name="email" placeholder="Correo">
            </div>
            <div class="input-w">
                <input type="password" name="password" placeholder="Contraseña">
            </div>

            <input class="btn" type="submit" name="register" value="Resgitrate" > 
            
            <?php
             include("send.php");
            ?>
    </form>

</body>
</html>