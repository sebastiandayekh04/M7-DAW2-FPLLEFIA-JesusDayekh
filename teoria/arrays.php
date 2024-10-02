<?php 

$estudiantes = array('Didac','David','Lucia');


$lista = Array("Suleiman","Brian","Dani");

//var_dump($lista);
print_r($lista); //parecido al var_dump, muestra información sobre una variable en una forma que es legible por humanos. 


//desde la version 5.4  PHP los corechetes suelen ser para listas
$lista2 = ["Didac", "Kevin", "David", 87, 32, 78.23, true];

echo $lista2 [1];
$lista2[2] = "Yehor";

//añadir elementos a un array
$colores = ['rojo','azul','verde'];

$colores[] = 'naranja';
print_r($colores);
//2. Array asociativo
$tutor = [
    "nombre" => "Albert",
    "apellidos" => "Arrebola Sans",
    "edad" => 36
];
echo $tutor ["apellidos"];
$tutor["edad"] = 18;

$numeros = [1,2,3,4,5,6,7,8,9];
for ($i =0; $i < count($numeros); $i++){
    echo $numeros[$i] . "<br>";
    //echo $numeros [0]
}

//Recorrer un array con un foreach

$numeros = [1,2,3,4,5,6,7,8,9];
foreach($numeros as $num){
    echo ($num * 2) . " ";
}
// recorrer un array asociativo
$ciudades = [
    "Paris" => "Francia", 
    "Barcelona" => "espanya",
    "londres" => "Reino Unido"
];
foreach ($ciudades as  $ciudad => $pais){
    if( $ciudad == 'Barcelona'){
    echo "La ciudad de $ciudad[0] esta en $pais[0]";
    }
}

//foreach en arrays multidimensionales
//crea un array multidimensional de estudiantes y sus notas, y recorre cada estudiante con foreach para mostrar sus datos.
$estudiantes = [
    ["nombre" => "Anna", "nota" => 10, "genero" => 'm'],
    ["nombre" => "Dani", "nota" => 10, "genero" => 'h'],
    ["nombre" => "Yehor", "nota" => 11, "genero" => 'h'],
    ["nombre" => "Didac", "nota" => 9, "genero" => 'm'],
    ["nombre" => "David", "nota" => 12, "genero" => 'h'],
];

foreach ($estudiantes as $estudiante) {
    if($estudiante['genero'] == 'h') {
        echo "El estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']} <br>";
    } elseif ($estudiante['genero'] == 'm') {
        echo "La estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']} <br>";
    }
}
?>