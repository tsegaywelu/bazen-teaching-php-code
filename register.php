<?php

//database connection 
$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection faild'.$conn->connect_error);
}

$firstName=$_POST['firstName'];
$latname=$_POST['lastName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$phonnumber=$_POST['number'];


//echo $firstName . $latname . $gender . $email . $phonnumber . $password;
//preparing the sql statement
$stmt=$conn->Prepare('INSERT INTO registration(firstName,lastName,gender,email,password,number) VALUES(?,?,?,?,?,?)');

if($stmt==false){
    die("preparation failed". $conn->error);
}

$stmt->bind_param('sssssi',$firstName,$latname,$gender,$email,$password,$phonnumber);
//$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);

if($stmt->execute()){
    echo "you have registerd successfully!";
    header('location:loginhtml.php');
}
else{
    echo "registration failed ". $stmt->error;
}

$stmt->close();
$conn->close();

?>