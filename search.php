<?php

$conn = mysqli_connect('localhost', 'root','', 'oophp');

$search = $_POST['search'];  

$findName = 'name';
$tableName = 'names';

if(!empty($search)){
    
    $query = "select $findName from $tableName where $findName like '$search%'";
    
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