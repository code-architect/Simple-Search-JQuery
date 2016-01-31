<?php

include_once("db.php");


if(isset($_POST['sword_name'])){
    
  $data = $_POST['sword_name'];
    
    $query = "insert into $tableName(name) values('$data')";
    $query_sword_name = mysqli_query($conn, $query);
    
    if(!$query_sword_name){
        echo 'Inserting data Failed.Try Again.';
    } else {
        echo 'Success.Data Inserted.';
    }
}