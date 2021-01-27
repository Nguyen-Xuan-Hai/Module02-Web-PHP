<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $listPrice = $_POST['listPrice'];
        $discountPercent = $_POST['discountPercent'];
        $discountAmount = $listPrice * $discountPercent * 0.01;

        echo "Amount :".$discountAmount;
    }
    