<?php

$con = mysqli_connect('localhost' , 'root');

if($con){
    echo "connection successful";
}
else{
    echo "failed to connect";
}
mysqli_select_db($con , 'traveldb');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = " INSERT INTO traveltb ( name, email, phone) VALUES ('$name','$email','$phone') " ;

mysqli_query($con , $query);


#echo "$query";

header('location:index.php');

?>