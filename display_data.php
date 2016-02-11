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
        echo "<td><a rel='".$row['id']."' class='name-link' href='javascript:void(0)'>".$row['name']."</a></td>";
    echo "</tr>";
}

?>
<script>
 //$("#action-container").hide();
     $(document).ready(function(){
               
          $(".name-link").on('click', function(){

              $("#action-container").show();

              var id = $(this).attr("rel");

              $.post("process.php", {id: id}, function(data){

                  $("#action-container").html(data);
              });          
          });
         
     });
</script>