<?php 

include_once('cnx/conexion.php');
session_start();

$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$medida = $_POST['medida'];
$pozo = $_POST['pozo'];

$query = "INSERT INTO mediciones (pozo, hora, fecha, medida) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query); 

    if ( false===$stmt ) {
        
        die('prepare() failed: ' . htmlspecialchars($conn->error));

    }

    $bind = $stmt->bind_param('issi', $pozo, $hora, $fecha, $medida);

    if ( false === $bind ) {
        error_log('bind_param() failed:');
        exit();
    }

    if ($exec = $stmt->execute()){
        echo true;
    }

    if ( false === $exec ) {
        error_log('mysqli execute() failed: ');
        error_log( print_r( htmlspecialchars($stmt->error), true ) );
        echo false;
    }

    ?>



?>