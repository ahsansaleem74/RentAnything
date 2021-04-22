<?php


echo $user_id = $_GET['id'];



include 'configure.php';

 		$sql = "DELETE FROM tblads WHERE adId ={$user_id }";

 		$result =mysqli_query($conn,$sql) or die ("query Unsuccessful.");


//header("Location: http://localhost/web/myAds.php");

mysqli_close($conn);


?>
