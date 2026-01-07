<?php
/* pistas: 
- strolower --> Pasa texto a minusculas
- explode() --> Divide texto en palabras
- array_count_values() --> Cuenta repeticiones
- foreach -->  Recorre arrays
*/
// Texto original
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet, pero PHP si esta muerto";

// Convertir el texto a minúsculas
$texto = strtolower($texto);

// Eliminamos los simbolos que podrian romper las palabras, que no deberiamos poenr nada raro pero fue un tip que me dio la IA, ya que le pase lo que hice y me recomendo poner esto de extra ;)
$texto = str_replace(
    ["…", ".", ",", "%"],
    "",
    $texto
);

// Convertir el texto en un array 
$palabras = explode(" ", $texto);

// Filtrar palabras con menos de 3 letras
$palabrasFiltradas = [];

foreach ($palabras as $palabra) {
  //strlen --> devuelve la longitud de la palabra y la usamos para ignorar palabras de menos de 3 letras
    if (strlen($palabra) >= 3) {
        $palabrasFiltradas[] = $palabra;
    }
}

//Contar cuántas veces aparece cada palabra
$contador = array_count_values($palabrasFiltradas);

//Mostrar cuántas palabras hay
echo "<h3>Total de palabras: " . count($palabrasFiltradas) . "</h3>";

//Mostrar solo las palabras repetidas
echo "<h3>Palabras repetidas</h3>";

$maxRepeticiones = 0;
$palabraMasRepetida = "";
// Como en la frase de ejemplo no hay palabras repetidas pongo este codigo para que tenga sentido,pero he cambiado la frase tambien para que se entienda mejor el ejemplo, poniendo palabras repetidas
$hayRepetidas = false;


foreach ($contador as $palabra => $cantidad) {

    if ($cantidad > 1) {
        echo "$palabra → $cantidad veces<br>";
        $hayRepetidas = true;

        if ($cantidad > $maxRepeticiones) {
            $maxRepeticiones = $cantidad;
            $palabraMasRepetida = $palabra;
        }
    }
}

if ($hayRepetidas) {
    echo "<h3>Palabra más repetida</h3>";
    echo "$palabraMasRepetida ($maxRepeticiones veces)";
} else {
    echo "<h3>No hay palabras repetidas en el texto</h3>";
}