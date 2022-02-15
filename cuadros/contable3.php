<?php
/*-------------------------------------------------------------*/
    require ("conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if (mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    /*---------------------------------------------------------*/
    $fechaini = $_POST["totalperiodo"];
    $fechaini1 = explode("/", $fechaini);
    $fechaInicio = /*$fechaini1[2]."-".$fechaini1[1]."-".*/$fechaini1[0];
    /*echo ("<h3>".$fechaInicio."</h3>");*/

    $fechaFin = $_POST["totalperiodo2"];
    $fechaFin1 = explode("/", $fechaFin);
    $fecha_Fin = /*$fechaFin1[2]."-".$fechaFin1[1]."-".*/$fechaFin1[0];
    /*echo ("<h3>".$fecha_Fin."</h3>");*/

    $globase = "SELECT * FROM ingreso WHERE fecha BETWEEN '$fechaInicio' AND '$fecha_Fin'";
    $glob = mysqli_query($conexion, $globase);
    $row = mysqli_fetch_assoc($glob);
    $total_rows = mysqli_num_rows($glob);

    if ($total_rows > 0){
        do {            
                echo ($row["id"]." - ");
                /*echo ("<br>");*/
                echo ($row["nombre"]." / ");
                /*echo ("<br>");*/
                echo ($row["identificacion"]." / ");
                /*echo ("<br>");*/
                echo ($row["placa"]." / ");
                /*echo ("<br>");*/
                echo ($row["monto"]." / ");
                /*echo ("<br>");*/
                echo ($row["fecha"]);
                echo ("<br><br>");

        } while ($row = mysqli_fetch_assoc($glob));
        mysqli_free_result($glob);
    } else {
        echo ("No hay registros");
    }
?>