<?php
include("conexion.php");

if(isset($_POST['register'])){ 
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 
    ){

        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $fecha = date("y/m/d");
        $consulta="INSERT INTO datos(nombre, apellido, email, contraseña, fecha)
                    VALUES ('$name','$lastname','$email','$password','$fecha')";
        $resultado = mysqli_query($conex, $consulta);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Location: portada2.html");
        exit;
         } else{
            ?>
                <h3 class= "error">Huvo un error</h3>
            <?php
        }
     }else{
        ?>
            <h3 class= "error">Llena todos los campos</h3>
    <?php

        }   
}      


