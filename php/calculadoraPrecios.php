<?php
/**
 * @file calculadoraPrecios.php
 * @brief Aplicacion de calculadora de precios
 * @author Javier Muñoz Parra
*/


/**
 * Calculo del precio del IVA
 * 
 * @param float $precio es el precio base del producto.
 * @param float $porcIVA.
 * @param $total es el calculo del precio final con el IVA
 * @return float Precio final con el IVA. */ 
function calcularPrecioIVA($precio, $porcIVA){
    $total = $precio + ($precio * ($porcIVA / 100));
    return $total;
}

/**
 * Calculo descuento
 * 
 * @param float $precio del producto
 * @param float $descuento del producto
 * @param float $total devuelve el calculod el descuento
 * @return float precio final tras el descuento al precio de un producto
 */

function calcularDescuento($precio, $descuento){
    $total = $precio - ($precio * ($descuento / 100));
    return $total;
}

/**
 * @param float $precio precio base del producto.
 * @param float $descuento porcentaje de descuento.
 * @param float $porcIVA porcentaje de IVA.
 * @return float Precio final completo con descuento e IVA aplicados.
*/

function calcularPrecioFinal($precio, $descuento, $porcIVA){
    $precioDescuento = calcularDescuento($precio, $descuento);
    $precioFinal = calcularPrecioIVA($precioDescuento, $porcIVA);
    return $precioFinal;
}


//Ejemplos de uso
$precio = 150.0;
$iva = 21.0;
$descuento = 14.0;

$precioConIva = calcularPrecioIVA($precio, $iva);
$precioConDescuento = calcularDescuento($precio, $descuento);
$precioFinalTotal = calcularPrecioFinal($precio, $descuento, $iva);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con php</title>
</head>
<body>
    <h1>Calculadora de Precios</h1>
<p><strong>Precio base:</strong> <?php echo $precio; ?></p>
    <p><strong>Precio con IVA <?php echo $iva; ?>%:</strong> <?php echo $precioConIva; ?></p>
    <p><strong>Precio con Descuento del <?php echo $descuento; ?>%:</strong> <?php echo $precioConDescuento; ?></p>
    <p><strong>Precio Final:</strong> <?php echo $precioFinalTotal; ?> euros</p>
</body>
</html>