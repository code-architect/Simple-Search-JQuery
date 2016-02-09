<?php
include_once('db.php');

$search = $_POST['search']; 

$fieldName = 'name';

if(!empty($search)){
    
    $query = "select $fieldName from $tableName where $fieldName like '$search%'";
    
    $result = mysqli_query($conn, $query);
    
    $count = mysqli_num_rows($result);
    
    
    if(!$result){
        
        die('Query failed!'.mysqli_error($conn));
    }
    
    
    if($count <= 0){
        
        echo "Sorry Sword Not Fount";
        
    }else{ 
    
        while($row = mysqli_fetch_array($result)){

            $name = $row['name'];


            echo '<ul class = "list-unstyled">';

            echo '<li>'.$name.'</li>'; 

            echo '</ul>';
        }
    }

    
    
}

?>