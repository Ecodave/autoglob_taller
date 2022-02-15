<?php
    try{
        $base = new PDO("mysql:host=127.0.0.1:3312;dbname=autoglob", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $querry = "SELECT * FROM login WHERE usuario = :login AND clave = :password";
        $resultado = $base->prepare($querry);
        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if($numero_registro != 0){
            session_start();
            $_SESSION["usuario"] = $_POST["login"];
            header("location:inicio.php");
        }else{
            header("location:index.php");
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
?>