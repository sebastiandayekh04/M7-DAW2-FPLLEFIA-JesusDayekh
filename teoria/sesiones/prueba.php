<?php 
session_name('Prueba-Sesion1');
session_start();

$_session['items'] = ['Juan','Pedro','Pablo'];
$milista = $_session['items'];


print_r($_session['items']);

function addItem($item){
    array_push($$_session['items'], $item);
}

addItem('Maria');

print_r($_session['items']);
?>