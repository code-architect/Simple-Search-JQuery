<?php
include_once('db.php');

$search = $_POST['search']; 

$fieldName = 'name';

if(!empty($search)){
    
    $query = "select $fieldName from $tableName where $fieldName like '$search%'";
    
    $result = mysqli_query($conn, $query);
    
    
    if(!$result){
        
        die('Query failed!'.mysqli_error($conn));
    }
    
    
    while($row = mysqli_fetch_array($result)){
        
        $name = $row['name'];
        
        
        echo '<ul class = "list-unstyled">';
        
        echo '<li>'.$name.'</li>'; 
        
        echo '</ul>';
    }
    
    
    
}

?>