<?php
require_once 'config.php';

//Fetch all clients
$result = $mysqli->query("SELECT * FROM clientes ORDER BY id DESC");
print_r($result);


$clientes = $result->fetch_all("utf8mb4");


print '<br><br><br><br><br><br><br>';
echo '<pre>';
print_r($clientes);
echo '<pre>';

?>