<?php

include_once('cnx/conexion.php');
session_start();

$query = 'SELECT id FROM pozos';
$result =  mysqli_query($conn,$query);
$stmt = $con->prepare($query);

if($stmt->execute()){

    $result = $stmt->get_result();

    if(!mysqli_num_rows($result) == 0){
        
        while($row = $result->fetch_array()){
            $json[] = array(
                'id' => $row['id'],
            );
        }

        $jsonString = json_encode($json);
        echo $jsonString;
        exit();

    }else{

        echo false;
        exit();

    }
    
}else{

 die ('Error al recuperar los Pozos ' . mysqli_error($conn));

}

?>