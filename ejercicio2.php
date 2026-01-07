<?php

// Array del carrito de compras, es un array dentro de otro array
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Esta funcion es para calcular el total general del carrito
function TotalCarrito($carrito) {
    $total = 0;

    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];
        $total += $subtotal;
    }

    return $total;
}

// Mostrar productos
echo "<h2>Carrito de compras</h2>";

foreach ($carrito as $item) {
  //Calcula el coste de cada producto
    $subtotal = $item["precio"] * $item["cantidad"];

    echo "Producto: " . $item["producto"] . "<br>";
    echo "Precio unitario: " . $item["precio"] . " €<br>";
    echo "Cantidad: " . $item["cantidad"] . "<br>";
    echo "Subtotal: " . $subtotal . " €<br><br>";
}

// Calcular total sin descuento
$total = TotalCarrito($carrito);

// Calcular descuento
$descuento = 0;

/* Aplicamos estos descuentos:
Si el total > 1000 → 10% de descuento
Si el total > 500 → 5% de descuento
Si no → sin descuento
*/

if ($total > 1000) {
    $descuento = $total * 0.10;
} elseif ($total > 500) {
    $descuento = $total * 0.05;
}

// Total final
$totalFinal = $total - $descuento;

// Mostrar resumen
echo "<h3>Resumen</h3>";
echo "Total sin descuento: $total €<br>";
echo "Descuento aplicado: $descuento €<br>";
echo "Total final: $totalFinal €<br>";
