<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="icon" type="image/icon" href="img/iconautoglob.ico">
    <title>login</title>
</head>
<body>
    <form action="pruebalogin.php" method="post">
        <table>
            <tr><td id="title" colspan="2"><label>AutoGlob</label></td></tr>
            <tr><td rowspan="5"><img src="img/login1.png"/></td>
                <td id="user1"><label>Usuario</label></td></tr>
            <tr><td><input id="user2" type="text" name="login"/></td></tr>
            <tr><td id="pass1"><label>Contraseña</label></td></tr>
            <tr><td><input id="pass2" type="password" name="password"/></td></tr>
            <tr><td><input id="btenter" type="submit" value="Ingresar"/></td></tr>
        </table>
    </form>
</body>
</html>