<?php 

include ('db.php');

$id = "";
$query = "INSERT INTO pozos (id) VALUES (?)";
$stmt= $con->prepare($query);
$bind = $stmt->bind_param('i',$id);

if(!$stmt){

    die('Error al preparar el pozo ' . htmlspecialchars($con->error));

}

if($stmt->execute()){

    $query = "SELECT id FROM pozos ORDER BY id DESC LIMIT 1";

    $stmt = $con->prepare($query);

    if($stmt->execute()){

        $result = $stmt->get_result();
        if(!mysqli_num_rows($result) == 0){
            
            $row = $result->fetch_array();
            $idUltimo = $row['id'];
            echo $idUltimo;
            $conn->close();
            exit();

        }else{

            echo false;
            $conn->close();
            exit();

        }
    }
}else{
    echo ('Error al momento de crear el pozo');
}

if($exec === false){

    echo error_log('bind_param() failed:');
    echo error_log( print_r( htmlspecialchars($stmt->error), true ) );
    exit();

}


?>