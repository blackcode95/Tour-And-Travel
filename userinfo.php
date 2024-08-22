<?php

$con = new mysqli("localhost","root","","tourandtravelsdatainfo");

if($con){
    echo "Connection established.";
}
else{
    echo "No Connetion.";
}

// mysqli_select_db($con,"tourandtravelsdatainfo");

$user = $_POST['user'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userdatainfo (user, email, mobile, comments) 
values ('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);


?>