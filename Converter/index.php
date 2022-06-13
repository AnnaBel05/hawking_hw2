<?php

use Controllers\ConverterController;
use Exceptions\NumberNegativeException;

$conv = new ConverterController;

$usd = $conv->UsdToRub();
$rub = $conv->RubToUsd();

function checkNegative() 
{
    if ($_GET["go"] < 0) throw new NumberNegativeException;
}

if ($_GET["go"]) {
    try 
    {
        checkNegative();
        $usdToRub = $_GET["usd"] * $usd;
    }
    catch(NumberNegativeException $ex)
    {
        echo "Your number is negative";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Конвертер валют</title>
</head>
<body>
 <p>Доллар в рублях: 
     <?= $usd ?>
 </p>
 <hr>
 <form action="/" method="get">
 <p>Доллары: <input type="number" name="usd"></p>
 <input type="submit" value="Отправить" name="go">
 </form>
 <p>Итог: <?= $usdToRub ?></p>
</body>
</html>