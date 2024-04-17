<?php
// Direccion IP del servidor donde se está ejecutando el script
$server_ip = $_SERVER['SERVER_ADDR'];

// Nombre del host del servidor donde se está ejecutando el script
$server_name = $_SERVER['SERVER_NAME'];

// Software que está utilizando el servidor para servir el script
$server_software = $_SERVER['SERVER_SOFTWARE'];

// Información del agente de usuario (user agent) desde el que se está solicitando el script
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Dirección IP del cliente que está solicitando el script
$client_ip = $_SERVER['REMOTE_ADDR'];

// Mostrar la información obtenida
echo "Dirección IP del servidor: $server_ip <br>";
echo "Nombre del host del servidor: $server_name <br>";
echo "Software del servidor: $server_software <br>";
echo "Agente de usuario: $user_agent <br>";
echo "Dirección IP del cliente: $client_ip <br>";
?>
