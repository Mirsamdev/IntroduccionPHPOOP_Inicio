<?php include 'includes/header.php';

// Conectar a la BD con Mysqli

$db = new mysqli('localhost', 'root', '', 'bienesraices_inicio');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// lo ejecutamos 
$stmt->execute();

// Creaos la variable 
$stmt->bind_result($titulo, $imagen);

// Asignamos el resultado


// Imprimir el resultado
while($stmt->fetch()):
  var_dump($titulo);
endwhile;

include 'includes/footer.php';