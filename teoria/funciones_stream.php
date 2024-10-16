<?php 
$cadena = "Hola Mundo";
//1.longitud de caracteres --> strlen()

echo strlen($cadena);

//2. strpos

echo strpos($cadena, "mundo");
//3. str_replace
echo str_replace("mundo", "Barcelona", $cadena);
//4. strtolower
echo strtolower($cadena);
//5. strtoupper
echo strtoupper($cadena);
//6.ucfirst
echo ucfirst($cadena);
//7. ucwords
echo ucwords($cadena);
//8. trim
//elimina espacio en blanco al princio y al final de una cadena
$cadena2 = ' pepsi ocacola ';
echo trim($cadena2);
//9. substr()
//obtiene una parte de una cadena
echo substr($cadena2, 4, 4);
//10 implode 
$array = ["hola", "mundo", "php"];
 echo implode ("", $array);
 // 12. in_array() mira si existe o no en un array
 $os = ["Mac", "NT", "Irix", "Linux"]; // Corregido: se usa = en lugar de espacio
 if (in_array("Irix", $os)) { // Corregido: añadido 'if'
     echo "Existe Irix";
 }
 // 13. array_search
 // busca un valor en un array y devuelve la clave correspondiente, si no está devuelve false
 $array = ["manzana", "pera", "naranja"]; 
 $clave = array_search("naranja", $array); 
 echo $clave; 
 
 // 14. array_map
 $arraymap = [1, 2, 3, 4]; 
 $resultado = array_map(function($numero) { 
     return $numero * 2; 
 }, $arraymap); 
 
 print_r($resultado); // Resultado: Array ([0] => 2 [1] => 4 [2] => 6 [3] => 8)
 //15. 
?>