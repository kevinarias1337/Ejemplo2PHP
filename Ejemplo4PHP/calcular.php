<?php
    if(isset($_POST["btncalcular"])){
        require_once "Fibonacci.php";

        $fibonacci = new Fibonacci();

        $valor = $_POST["txtvalor"];

        $fibonacci->setValorserie($valor);

        $fibonacci->fibonacciMientras();
        echo "<br>";
        
        $fibonacci->fibonacciHacerMientras();
        echo "<br>";

        $fibonacci->fibonacciPara();
    }

    if(isset($_POST["btnsumar"])){
        require_once "Sumatoria.php";

        $sumatoria = new Sumatoria();
        $valor2 = $_POST["txtvalor2"];

        $sumatoria->setValorserie2($valor2);
        $sumatoria->sumatoriaValores();
        echo "<br>";
    }
?>