<?php

include_once("db.php");


// Update Data **/
if(isset($_POST['updatethis'])){
    
    $id     =    mysqli_real_escape_string($conn,$_POST['id']);
    $title  =    mysqli_real_escape_string($conn,$_POST['title']);
    
    $query = "UPDATE $tableName SET name = '$title' WHERE id = $id";
    
    $result_set = mysqli_query($conn, $query);
    
    if(!$result_set){
        die("Falid To Update".mysqli_error($conn));
    }
    
}
// Update Data ends **/




// Delete Data **/
if(isset($_POST['deletethis'])){
    
    $id     =    mysqli_real_escape_string($conn,$_POST['id']);
   
    
    $query = "DELETE FROM $tableName WHERE id = $id";
    
    $result_set = mysqli_query($conn, $query);
    
    if(!$result_set){
        die("Falid To Update".mysqli_error($conn));
    }
    
}




// Display data on click **/
if(isset($_POST['id'])){   
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);


    $query = "SELECT * FROM $tableName WHERE id = $id";
    $query_data_info = mysqli_query($conn, $query);

    if(!$query_data_info){
        die('Query Failed!'.mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($query_data_info)){
        
        
            echo '<p id="feedback" class="bg-success"></p>';
            echo "<input type = 'text' rel = '".$row['id']."' class= 'form-control title-input' value = '".$row['name']."'><br>";
            echo "<input type = 'button' class = 'btn btn-success sword_update' value = 'Update'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<input type = 'button' rel = '".$row['id']."' class = 'btn btn-danger sword_delete' value = 'Delete'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            echo "<input type = 'button' class = 'btn btn-close' value = 'Close'>";
        
    }
}
// Display data on click ends **/


?>
<script>

    $(document).ready(function(){
        
        var id;
        var title;       
        var updatethis = "update";
        var deletethis = "delete";
        
       // extract id and title
       $(".title-input").on('input', function(){
           
           id = $(this).attr('rel');
           title = $(this).val();
        });
        
           
      // Update button function
      $(".sword_update").on('click', function(){
          
          $.post("process.php", {id: id, title: title, updatethis: updatethis}, function(data){
              
              $("#feedback").text("Updated Successfully");
              
          });
      });
      // Update button function ends
    
        
        
        
        
     // Delete button function  
      $(".sword_delete").on('click', function(){
          
          if(confirm('Are You Sure You Want To Delete This???')){
          
              id = $(this).attr('rel');

              $.post("process.php", {id: id, deletethis: deletethis}, function(data){

                  //$("#feedback").text("Deleted Successfully");                 

                   $("#action-container").hide();
              });
          }
      });
     // Delete button function ends
        
        
     // Close button function 
     $(".btn-close").on('click', function(){
     
        $("#action-container").hide();
     });
        
        
       
    });
    
</script>