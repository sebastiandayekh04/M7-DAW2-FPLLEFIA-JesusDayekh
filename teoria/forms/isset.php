<?php 
// NULL, IS_NULL(), UNSET() -> PARA HACER NULA UNA VARIABLE
$numero = 23;
unset($numero);


if (is_null($numero)) {
    echo 'Es null';
} else {
    echo 'No es null';
}

// ISSET - EXISTE -> ISSET
if (!empty($numero)) {
    echo 'Existe';
}

//EMPTY - No Existe --> !EMPTY

//IS_EMPTY - NO EXISTE

?>