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
    <input type="text" name="amount" placeholder="Lượng Tiền Đầu Tư ban Đầu">
    <input type="text" name="rate" placeholder="Lãi suất năm">
    <input type="text" name="year" placeholder="Số năm đầu tư">
    <button type="submit">Calculate</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $amount = $_POST['amount'];
        $rate = $_POST['rate'];
        $years = $_POST['year'];

        $area = $amount * ((1 + $rate/100) ** $years);
        echo $area;
    }
?>
</body>
</html>
