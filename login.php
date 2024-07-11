<?php
$conn=mysqli_connect("localhost","root","","test");
if(!$conn)
{
    echo 'Connection error: '.mysqli_connect_error();
    die();
}


 $email=$_POST['email'];
 $password=$_POST['password'];

 $sql="SELECT * FROM registration WHERE email='$email' AND password='$password'";
 $result=mysqli_query($conn,$sql);
 if($result->num_rows>0)
 {
     $row=$result->fetch_assoc();
     if($row['password']==$password)
     {
         session_start();
         $_SESSION['email']=$email;
         header("Location: home.html");
     }
     exit();

 }
 else {
     echo "Invalid username or password."; //but this message have to go back to login page 

     header("Location: loginhtml.php?msg=Invalid username or password.");
     exit();
 }

 //i have to close the connection
 mysqli_close($conn);


?>