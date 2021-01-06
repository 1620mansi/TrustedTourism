<?php
//connection with database
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
//selecting databse
mysqli_select_db($con, 'forwebsite');

//accessing variables
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];


//queryfy
$query = " insert into forwebsite (user, email, mobile, comment) 
values ('$user', '$email', '$mobile', '$comments')";
$query = "INSERT INTO `forwebsite` (`user`, `email`, `mobile`, `comment`) 
VALUES ('$user', '$email', '$mobile', '$comments')";

echo "$query";
//fire query

mysqli_query($con, $query);
header('location:index.php');

?>