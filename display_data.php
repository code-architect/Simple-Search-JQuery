<?php

include_once("db.php");


$query = "SELECT * FROM $tableName";
$query_data_info = mysqli_query($conn, $query);

if(!$query_data_info){
    die('Query Failed!'.mysqli_error($conn));
}

while($row = mysqli_fetch_array($query_data_info)){
    echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
    echo "</tr>";
}