<?php

//connect to mysql database
$con = mysqli_connect("localhost", "root", "", "mydb") or die("Error " . mysqli_error($con));



$Name= $_POST['name'];
$Email= $_POST['email'];
$Gender= $_POST['gender'];
$Bg= $_POST['bg'];
$Contact= $_POST['contact'];
$Country= $_POST['country'];
$State= $_POST['state'];
$City= $_POST['city'];
$Address= $_POST['address'];


if($_POST['name'] ||$_POST['email'] ||$_POST['gender'] ||$_POST['bg'] || $_POST['contact'] || $_POST['country'] || $_POST['state'] || $_POST['city'] =="" )
	
{
	echo "Please insert into all required fields";
}	
else{
$query = "INSERT INTO donors(name,email,gender,contact,bg,country,state,city,address)VALUES('$Name','$Email','$Gender','$Bg','$Contact','$Country','$State','$City','$Address')";
}

if(mysqli_query($con,$query)){
echo "inserted";}


else{
echo "fail";}
?>