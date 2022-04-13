<?php
include("connection.php");

error_reporting(0);
?>

<?php

$sql= "SELECT * FROM admin2 ";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
      {

        while($row=mysqli_fetch_assoc($result)){
          echo $row["name"];
            }
            

      }
      else {
        echo"Error".mysqli_error($conn);
      }
 
 

?>