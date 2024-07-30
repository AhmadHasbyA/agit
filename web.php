<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Tidak bisa dibagi dengan nol";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Operator tidak valid";
        }
        echo "<br><b>Hasil hitung:</b> " . $result;
    }
    ?>