<?php

include_once('cnx/conexion.php');
session_start();

$query = 'SELECT COUNT(id) FROM pozos';
$result =  mysqli_query($con,$query);
$stmt = $conn->prepare($query);

if($stmt->execute()){

    $result = $stmt->get_result();

    if(!mysqli_num_rows($result) == 0){
        
        $row = $result->fetch_array();
        $numPozos = $row['COUNT(id)'];
        echo $numPozos;
        exit();

    }else{

        echo false;
        exit();
        
    }
    
}else{

 die ('Error al recuperar los Pozos ' . mysqli_error($conn));

}

?>