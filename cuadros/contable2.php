<?php
    $arriendo1 = $_POST['arriendo1'];
    $energia1 = $_POST['energia1'];
    $agua1 = $_POST['agua1'];
    $internet1 = $_POST['internet1'];
    $telefono1 = $_POST['telefono1'];
    $materiales1 = $_POST['materiales1'];
    $repuestos1 = $_POST['repuestos1'];
    $manodeobra1 = $_POST['manodeobra1'];
    $otros1 = $_POST['otros1'];
/*-------------------------------------------------------------------------------*/
    require ("conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if (mysqli_connect_errno()){
        echo "Fallo al conectar la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("No se encontro la BBDD");
    mysqli_set_charset($conexion, "utf8");
/*--------------------------------------------------------------------------------*/
    $intro = "INSERT INTO gasto (arriendo, energia, agua, internet, movil, materiales, repuestos,
                manoDeObra, otros) VALUES (?,?,?,?,?,?,?,?,?)";
    $resultado = mysqli_prepare($conexion, $intro);
    $good = mysqli_stmt_bind_param($resultado, "iiiiiiiii", $arriendo1, $energia1, $agua1, $internet1,
                                    $telefono1, $materiales1, $repuestos1, $manodeobra1, $otros1);
    $good = mysqli_stmt_execute($resultado);
    if ($good == false){
        echo "error en la consulta";
    }else {
        header("Location: collectors.php");
        mysqli_stmt_close($resultado);
    }
?>