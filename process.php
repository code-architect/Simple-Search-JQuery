<?php

include_once("db.php");


if(isset($_POST['id'])){   
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);


    $query = "SELECT * FROM $tableName WHERE id = $id";
    $query_data_info = mysqli_query($conn, $query);

    if(!$query_data_info){
        die('Query Failed!'.mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($query_data_info)){
        
            echo "<input type = 'text' class= 'form-control sword_id' value = '".$row['name']."'><br>";
            echo "<input type = 'button' class = 'btn btn-success sword_id' value = 'Update'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<input type = 'button' class = 'btn btn-danger sword_id' value = 'Delete'>";            
        
    }
}


?>