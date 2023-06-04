<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi calculadora de Senati</title>
    <link rel='stylesheet' href='css/index.css'>
</head>
<body>
    
    <div class="container"> 

        <form action="procesar.php" method="post" class="form-register">
            <br>
        <h4>Calculadora Digital</h4>
        <label>Numero 1</label>
        <p></p>
        <input class="controls" type="text" name="val1">
        <p></p>
        <label>Numero 2</label>
        <p></p>
        <input class="controls" type="text" name="val2">
        <p></p>
        <select name="opcion" class="botons2">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
            <option value="raiz">Raiz cuadrada</option>
            <option value="potencia">Potencia</option>   
        </select>
        <p></p>
        <center><button class="botons">Calular</button> </center>
    </form>
        </div>
</body>
<!-- el script va abajo del body  <script src="#"></script>-->
</html>