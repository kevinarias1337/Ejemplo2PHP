<?php
if(isset($_POST["btncalcular"])){

    require_once "Moneda.php";
    $objmoneda = new Moneda();

    $valor = $_POST["txtvalorpesos"];
    $objmoneda->setValorpesos($valor);

   // echo "Lo que hay en el atributo de valorpesos es: ";
    // $objmoneda->getValorpesos();
    Echo "La conversion de: " . $valor . " es " .$objmoneda->calcularConversion();
}
else{
    echo "Error.";
}



?>