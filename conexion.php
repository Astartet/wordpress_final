<?php

$SERVER = 'localhost';
$DB = 'wordpress';
$USER = 'jorge';
$PASS = 'Erpen8lor.';

$conn = mysqli_connect($SERVER,$DB,$USER,$PASS);


if (!$conn) {
	die (mysqli_connect_error());
}
echo "Conexión correcta"
mysqli_close($conn);
?>