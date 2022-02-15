<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/collectors.css"/>
    <link rel="icon" type="image/icon" href="../img/iconautoglob.ico">
    <title>Financiero</title>

    <script type="text/javascript">
        function calcular(){
            try {
                var a = parseFloat(document.getElementById("firstope").value)||0,
                    b = parseFloat(document.getElementById("secondope").value)||0,
                    c = parseFloat(document.getElementById("thirdhope").value)||0,
                    d = parseFloat(document.getElementById("fourthope").value)||0;

                document.getElementById("totalgast").value = a + b + c + d;
            } catch(e) {}
        }
    </script>
</head>
<body>
    
<!-----------------------------------------seccion encabezado--------------------------------------------->
        <div id="title">
            <img src="../img/autoglobicon.png"id="logo" alt="logo autoglob fondo amarillo imagen en azul">
            <h1>AutoGlob</h1>
        </div>
<!-----------------------------------------seccion 1------------------------------------------------------>
    <form action="contables.php" method="POST">  
        <div id ="intitle">
            <h2>Ingresos</h2>
        </div>
        <div id="income">
            <input type="text" name="nomin" placeholder="Nombre" id="nomin1" 
                    alt="lugar para iongresar el nombre del usuario">
            <input type="text" name="identify" placeholder="Identificación" id="identify1" 
                    alt="lugar para ingresar el numero de identificación">
            <input type="text" name="plate1" placeholder="Placa" id="plate2" 
                    alt="lugar para ingresar la placa del vehiculo">
            <input type="text" name="amount1" placeholder="Monto" id="amount1" 
                    alt="lugar para ingresar el monto">
            <input type="datetime-local" name="date1" id="date2" 
                    alt="lugar para ingresar la fecha">
            <input type="submit" value="Agregar" id="submit1" name="submit1" 
                    alt="boton para agregar el ingreso">
        </div>
    </form>
<!-----------------------------------------seccion 2------------------------------------------------------>
    <form action="contable2.php" method="POST">
        <div id="movement">
            <h2>Movimientos</h2>
        </div>
        <div id="table1">
            <table>
                <tr>
                    <th>Arriendo</th>
                    <td id="noc"></td>
                    <td><input type="text" name="arriendo1" id="arriendo1"></td>
                    </tr>
                <tr>
                    <th>Energía</th>
                    <td id="noc"></td>
                    <td><input type="text" name="energia1" id="energia1"></td>
                </tr>
                <tr>
                    <th>Agua</th>
                    <td id="noc"></td>
                    <td><input type="text" name="agua1" id="agua1"></td>
                </tr>
                <tr>
                    <th>Internet</th>
                    <td id="noc"></td>
                    <td><input type="text" name="internet1" id="internet1"></td>
                </tr>
                <tr>
                    <th>Teléfono Móvil</th>
                    <td id="noc"></td>
                    <td><input type="text" name="telefono1" id="telefono1"></td>
                </tr>
                <tr>
                    <th>Materiales</th>
                    <td id="noc"></td>
                    <td><input type="text" name="materiales1" id="materiales1"></td>
                </tr>
                <tr>
                    <th>Repuestos</th>
                    <td id="noc"></td>
                    <td><input type="text" name="repuestos1" id="repuestos1"></td>
                </tr>
                <tr>
                    <th>Mano de obra</th>
                    <td id="noc"></td>
                    <td><input type="text" name="manodeobra1" id="manodeobra1"></td>
                </tr>
                <tr>
                    <th>Otros</th>
                    <td id="noc"></td>
                    <td><input type="text" name="otros1" id="otros1"></td>
                </tr>
            </table>
        </div>
        <div id="butons2">
            <input type="reset" value="Borrar" id="reset1" name="reset1" 
                    alt="boton para borrar los datos">
            <input type="submit" value="Guardar" id="submit3" name="submit3" 
                    alt="boton para guardar los datos">
        </div>
    </form>
<!--------------------------seccion 3 calculo de ingresos-------------------------------------------------->
    <form action="contable3.php" method="POST">
        <div id="titleconsultas">
            <h2>Consultas</h2>
        </div>
        <div id="periodo">
        <h2>Cálculo de Ingresos</h2>
        </div>
        <label>Fecha Inicio</label>
        <input type="datetime-local" name="totalperiodo" id="totalperiodo" 
                alt="lugar para ingresar el total del periodo">
        <label>Fecha Fin</label>
        <input type="datetime-local" name="totalperiodo2" id="totalperiodo2" 
                alt="lugar para ingresar el total del periodo">
        <input type="text" name="totalingresos" id="totalingresos" placeholder="Total"  
                alt="lugar para ingresar el total del periodo">
        <input type="submit" value="Calcular" id="submit4" name="submit4" 
                alt="boton para mostrar el total">
    </form>
<!-----------------------------------------seccion 4------------------------------------------------------>
    <form action="contable4.php" method="POST">
        <div id="gastos1">
            <h2>Cálculo de Gastos</h2>
        </div>
        <div id="evaluados">
            <div id="listagastosmain">
            <select name="listagastos" id="listagastos">
                <optgroup label="Listado Gastos">
                    <option value="arriendo">Arriendo</option>
                    <option value="energía">Energía</option>
                    <option value="agua">Agua</option>
                    <option value="internet">Internet</option>
                    <option value="teléfono móvil">Teléfono Móvil</option>
                    <option value="materiales">Materiales</option>
                    <option value="repuestos">Repuestos</option>
                    <option value="manodeobra">Mano de obra</option>
                    <option value="otros">Otros</option>
                    <option value="general">General</option>
                </optgroup>
            </select>
            </div>
            <div id="fechaini">
            <label>Fecha Inicio</label>
            </div>
            <input type="datetime-local" name="totalgastos" id="totalgastos" 
                    alt="lugar para ingresar la fecha de inicio de consulta del periodo ">
            <div id="fechafin">
            <label>Fecha Fin</label>
            </div>
            <input type="datetime-local" name="totalgastos2" id="totalgastos2" 
                    alt="lugar para ingresar la fecha de finalizacion de consulta del periodo">
            <input type="text" name="totalgastos3" id="totalgastos3" placeholder="Total"
                    alt="lugar para mostrar el total del periodo consultado">
            <input type="submit" value="Calcular" id="submit5" name="submit5"
                    alt="boton para mostrar el total">
        </div>
    </form>
<!------------------------------------------seccion 5 ------------------------------------------>
        <div id="restagasing">
            <h2>Ingresos menos Gastos</h2>
        </div>
        <div id="resingresos">
            <input type="text" name="restagasingresos" id="restagasingresos" 
                    placeholder="Ingresos" alt="espacio para mostrar el total consultado">
        </div>
<!------------------------------------------seccion 6 ------------------------------------------>
    

    <form action="" method="post">
        <div id="choicea">
            <select name="choice1" id="choice1">
                    <optgroup label="Listado Gastos">
                        <option value="arriendo">Arriendo</option>
                        <option value="energía">Energía</option>
                        <option value="agua">Agua</option>
                        <option value="internet">Internet</option>
                        <option value="teléfono móvil">Teléfono Móvil</option>
                        <option value="materiales">Materiales</option>
                        <option value="repuestos">Repuestos</option>
                        <option value="manodeobra">Mano de obra</option>
                        <option value="otros">Otros</option>
                        <option value="general">General</option>
                    </optgroup>
                </select>
                <input type="number" name="firstope" id="firstope" placeholder="1er valor"
                        alt="lugar para mostrar primer calculo a realizar" oninput="calcular()">
        </div>
        <div id="choiceb">
            <select name="choice2" id="choice2">
                    <optgroup label="Listado Gastos">
                        <option value="arriendo">Arriendo</option>
                        <option value="energía">Energía</option>
                        <option value="agua">Agua</option>
                        <option value="internet">Internet</option>
                        <option value="teléfono móvil">Teléfono Móvil</option>
                        <option value="materiales">Materiales</option>
                        <option value="repuestos">Repuestos</option>
                        <option value="manodeobra">Mano de obra</option>
                        <option value="otros">Otros</option>
                        <option value="general">General</option>
                    </optgroup>
                </select>
                <input type="number" name="secondope" id="secondope" placeholder="2do valor"
                        alt="lugar para mostrar segundo calculo a realizar" oninput="calcular()">
        </div>
        <div id="choicec">
            <select name="choice3" id="choice3">
                    <optgroup label="Listado Gastos">
                        <option value="arriendo">Arriendo</option>
                        <option value="energía">Energía</option>
                        <option value="agua">Agua</option>
                        <option value="internet">Internet</option>
                        <option value="teléfono móvil">Teléfono Móvil</option>
                        <option value="materiales">Materiales</option>
                        <option value="repuestos">Repuestos</option>
                        <option value="manodeobra">Mano de obra</option>
                        <option value="otros">Otros</option>
                        <option value="general">General</option>
                    </optgroup>
                </select>
                <input type="number" name="thirdhope" id="thirdhope" placeholder="3er valor"
                        alt="lugar para mostrar tercer calculo a realizar" oninput="calcular()">
        </div>
        <div id="choiced">
            <select name="choice4" id="choice4">
                    <optgroup label="Listado Gastos">
                        <option value="arriendo">Arriendo</option>
                        <option value="energía">Energía</option>
                        <option value="agua">Agua</option>
                        <option value="internet">Internet</option>
                        <option value="teléfono móvil">Teléfono Móvil</option>
                        <option value="materiales">Materiales</option>
                        <option value="repuestos">Repuestos</option>
                        <option value="manodeobra">Mano de obra</option>
                        <option value="otros">Otros</option>
                        <option value="general">General</option>
                    </optgroup>
                </select>
                <input type="number" name="fourthope" id="fourthope" placeholder="4to valor"
                        alt="lugar para mostrar cuarto calculo a realizar" oninput="calcular()">
        </div>
        <div id="choicee">
            <h2>Total</h2>
            <input type="number" name="totalgast" id="totalgast" placeholder="Resultado" 
                    alt="espacio donde se mostraran los resultados del calculo de los gastos">
        </div>
    </form>
    <div id="fin"></div>
</body>
</html>