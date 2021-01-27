<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1><br/>
    <fieldset>
        <legend>Caculator</legend>
        First operand:
        <input type="text" name="firstNumber"><br/>
        Operator:
        <select name="operator">
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select><br/>
        Second operand:
        <input type="text" name="secondNumber"><br/>
        <button type="submit">Calculate</button>
    </fieldset>
</form>
<h2>Result :</h2>

<?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $firstNumber = $_POST['firstNumber'];
        $operator = $_POST['operator'];
        $secondNumber = $_POST['secondNumber'];

        if ($operator === "Addition"){
            $total = $firstNumber + $secondNumber;
            echo $total;
        }elseif ($operator === "Subtraction"){
            $total = $firstNumber - $secondNumber;
            echo $total;
        }elseif ($operator === "Multiplication"){
            $total = $firstNumber * $secondNumber;
            echo $total;
        }elseif ($operator === "Division"){
            if ($secondNumber === "0"){
                echo "Không thể bằng 0";
            }else{
                $total = $firstNumber / $secondNumber;
                echo $total;
            }
        }
    }
?>
</body>
</html>

