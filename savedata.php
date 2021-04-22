<?php

if(isset($_FILES['postimage'])){
	
$t=time();

$file_name1= $_FILES['postimage']['name'];
$file_size1= $_FILES['postimage']['size'];
$file_tmp1= $_FILES['postimage']['tmp_name'];
$file_type1= $_FILES['postimage']['type'];

move_uploaded_file($file_tmp1,"serverphotos/". $t . $file_name1);

$file_name1 = $t .  $file_name1;

}

if(isset($_FILES['coverimage'])){
	

$file_name2= $_FILES['coverimage']['name'];
$file_size2= $_FILES['coverimage']['size'];
$file_tmp2= $_FILES['coverimage']['tmp_name'];
$file_type2= $_FILES['coverimage']['type'];

move_uploaded_file($file_tmp2,"serverphotos/". $t .  $file_name2);

$file_name2 = $t .  $file_name2;

}


	$name= $_POST['name']; 
	$email= $_POST['email'];
 	$mobileno = $_POST['mobileno'];
 	$city = $_POST['city'];
 	$rent = $_POST['rent'];
 	$category = $_POST['category'];
 	$title = $_POST['title'];
  	$desc = $_POST['desc'];
  	$price = $_POST['price'];
  	$condition = $_POST['condition'];
	$available = $_POST['available'];
  	$coverimage = $_FILES['coverimage'];
  	$postimage = $_FILES['postimage'];
	
	$dateTime = new DateTime('now', new DateTimeZone('Asia/Karachi')); 
	$date =  $dateTime->format("d/m/Y");
	$time =  $dateTime->format("H:i A");
	  
  	


$conn = mysqli_connect("localhost","root","","rentanything")
 		or die ("connection failed");

 		$sql = "INSERT INTO tblads (fullName,emailAddress,phoneNumber,adTitle,adDescription,adPrice,adcondition,adCity,itemAvailability,rentStatus,coverImage,adImage,adCategory,date,time) VALUES ('{$name}','{$email}','{$mobileno}','{$title}','{$desc}','{$price}','{$condition}','{$city}','{$available}','{$rent}','{$file_name1}','{$file_name2}','{$category}','{$date}','{$time}')";

 		 $result = mysqli_query($conn, $sql) or die ("Query Successful");


	
 		
header("Location: index.php");
exit();


?>