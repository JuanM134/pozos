<?php 

include_once('cnx/conexion.php');
session_start();

$pozo = $_GET['pozo'];


$query = "SELECT * FROM (SELECT * FROM medida ORDER BY fecha DESC LIMIT 10 ) medida WHERE pozo = $pozo ORDER BY fecha";

$stmt = $con->prepare($query);

if($stmt->execute()){

    $result = $stmt->get_result();

    if(!mysqli_num_rows($result) == 0){

        while($row = $result->fetch_array()){

            $json[] = array(

                'fecha' => $row['fecha'],
                'hora' => $row['hora'],
                'medida' => $row['medida']

            );
        }

        $jsonString = json_encode($json);
        echo $jsonString;

     exit();

    }else{

        die();
    }
    
}else{

 die ('Error al recuperar las meedidas tomadas' . mysqli_error($connection));

}
?>