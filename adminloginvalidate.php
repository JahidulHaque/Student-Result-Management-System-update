<?php
session_start();

?>


<?php
include("connection.php");

error_reporting(0);
?>

<?php
echo "hwllo";
 $a= "select name from admin"; 
 $res2=mysqli_query($conn,$a);
 $row2 = mysqli_fetch_assoc($res2);
 echo $row2["name"];
 
 if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['pass'];

  
  $sql="select * 
  from admin as a
  where a.name = '$username'; ";

  $res=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($res);
  if($password==$row['password']){
	  
    echo "<script type='text/javascript'>alert('Login successfull!')</script>";
    $_SESSION['username']=$username;
    echo "<script> window.location='adminF.php'</script>";
    //header('location:adminF.php');
  }
  else{
    echo "<script type='text/javascript'>alert('Login unsuccessfull! Wrong Username or Password')</script>";
    echo "<script> window.location='adminLoginform.php'</script>";
    //header('location:adminLoginform.php');
  
        
}
}
  
  
?>