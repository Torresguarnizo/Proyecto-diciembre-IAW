
<?php
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

function calcularPromedio($notas) {
    $suma = array_sum($notas);
    $cantidad = count($notas);
    return $suma / $cantidad;
}
$aprobados = 0;
$suspendidos = 0;
$mejorPromedio = 0;
$mejorEstudiante = "";

foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);

    echo "Estudiante: $nombre<br>";
    echo "Promedio: $promedio<br>";
      if ($promedio >= 6) {
        echo "Estado: Aprobado<br><br>";
        $aprobados++;
    } else {
        echo "Estado: Suspenso<br><br>";
        $suspendidos++;
    }
        if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}
echo "Total aprobados: $aprobados<br>";
echo "Total suspendidos: $suspendidos<br>";
echo "Mejor estudiante: $mejorEstudiante con promedio $mejorPromedio<br>";