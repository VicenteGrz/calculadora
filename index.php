<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="calculadora.css">
  
</head>
<body>
    <div class="calculadora">
        <div id="contenedor-display">
            <input type="text" id="display" disabled>
        </div>
        <div class="botones">
            <input type="button" value="7" onclick="agregarAlDisplay('7')">
            <input type="button" value="8" onclick="agregarAlDisplay('8')">
            <input type="button" value="9" onclick="agregarAlDisplay('9')">
            <input type="button" value="DEL" onclick="borrarUltimo()" class="borrar">
            <input type="button" value="CLEAR" onclick="limpiarDisplay()" class="borrar">
            <input type="button" value="4" onclick="agregarAlDisplay('4')">
            <input type="button" value="5" onclick="agregarAlDisplay('5')">
            <input type="button" value="6" onclick="agregarAlDisplay('6')">
            <input type="button" value="*" onclick="agregarAlDisplay('*')" class="operador">
            <input type="button" value="/" onclick="agregarAlDisplay('/')" class="operador">
            <input type="button" value="1" onclick="agregarAlDisplay('1')">
            <input type="button" value="2" onclick="agregarAlDisplay('2')">
            <input type="button" value="3" onclick="agregarAlDisplay('3')">
            <input type="button" value="+" onclick="agregarAlDisplay('+')" class="operador">
            <input type="button" value="-" onclick="agregarAlDisplay('-')" class="operador">
            <input type="button" value="0" onclick="agregarAlDisplay('0')">
            <input type="button" value="." onclick="agregarAlDisplay('.')">
            <input type="button" value="EXP" onclick="agregarAlDisplay('**')">
            <input type="button" value="ANS" onclick="agregarAlDisplay('ANS')">
            <input type="button" value="=" onclick="calcular()" class="igual">
        </div>
    </div>
    <script src="calculadora.js"></script>
</body>
</html>
