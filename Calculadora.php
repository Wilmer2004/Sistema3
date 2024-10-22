<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Gran trabajo grupal de Wilmer y Magdiel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        input[type="text"], input[type="button"] {
            width: 60px;
            height: 60px;
            font-size: 20px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="button"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="button"]:hover {
            background-color: #45a049;
        }
        #result {
            text-align: right;
            width: 250px;
            height: 60px;
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h1>Gran trabajo grupal de Wilmer y Magdiel</h1>
    <input type="text" id="result" disabled>
    <br>
    <input type="button" value="1" onclick="appendToResult('1')">
    <input type="button" value="2" onclick="appendToResult('2')">
    <input type="button" value="3" onclick="appendToResult('3')">
    <input type="button" value="+" onclick="appendToResult('+')">
    <br>
    <input type="button" value="4" onclick="appendToResult('4')">
    <input type="button" value="5" onclick="appendToResult('5')">
    <input type="button" value="6" onclick="appendToResult('6')">
    <input type="button" value="-" onclick="appendToResult('-')">
    <br>
    <input type="button" value="7" onclick="appendToResult('7')">
    <input type="button" value="8" onclick="appendToResult('8')">
    <input type="button" value="9" onclick="appendToResult('9')">
    <input type="button" value="*" onclick="appendToResult('*')">
    <br>
    <input type="button" value="C" onclick="clearResult()">
    <input type="button" value="0" onclick="appendToResult('0')">
    <input type="button" value="=" onclick="calculateResult()">
    <input type="button" value="/" onclick="appendToResult('/')">
</div>

<script>
    function appendToResult(value) {
        document.getElementById("result").value += value;
    }

    function clearResult() {
        document.getElementById("result").value = '';
    }

    function calculateResult() {
        const resultField = document.getElementById("result");
        try {
            resultField.value = eval(resultField.value);
        } catch (error) {
            resultField.value = 'Error';
        }
    }
</script>

</body>
</html>
