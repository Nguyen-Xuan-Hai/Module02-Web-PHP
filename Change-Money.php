<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>tien te</h1>
<form action="" method="post">
    <fieldset>
        <legend>chuyen doi tien te</legend>
        Nhap so tien can doi: <input type="text" name="num1" placeholder="nhap so tien"><br>
        Loai tien can doi:
        <select name="rate" id="">
            <option value="">Chon loai tien</option>
            <option value="23000">USD</option>
            <option value="225">Yen nhat</option>
            <option value="28000">Euro</option>
            <option value="3641">CNY</option>
        </select> <br>
        <!--        Fist operand: <input type="text" name="num2" placeholder="nhap so thu 1"><br>-->
        <button type="submit"> Convert</button>
    </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
//            var_dump($_POST);
        $num1 = $_POST['num1'];
        $operator = $_POST['rate'];
//        $num2 = $_POST['num2'];
        echo "VND : ".$num1*$operator ."d";
    }
    ?>
</form>
</body>
</html>