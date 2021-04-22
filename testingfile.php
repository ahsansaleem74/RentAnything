 
<!----connection --->
 <?php
 		$conn = mysqli_connect("localhost","root","","rentanything")
 		or die ("connection failed");




<!----fetchching from db --->

$sql = "SELECT  userId, userName, adTitle, adPrice, adDescription, adDays, adDate  FROM rentedads";



$conn = mysqli_connect("localhost","root","","rentanything")
 		or die ("connection failed");

 		$sql = "SELECT  userId, userName, adTitle, adPrice, adDescription, adDays, adDate  FROM rentedads";

 		$result =mysqli_query($conn,$sql) or die ("query Unsuccessful.");


 		$adname =$_POST['name'];
 $adphone =$_POST['phone'];
 $ademail =$_POST['email'];
 $adcity =$_POST['cityName'];
  $adrent =$_POST['rent'];
  $adcat =$_POST['category'];
  $adphone =$_POST['phone'];
  $addescr =$_POST['desc'];
  $adprice =$_POST['price'];
  $adcond =$_POST['condition'];
  $adavail =$_POST['available'];
  $adcoverimg =$_POST['imageCoverUpload'];
  $aduploadimg =$_POST['imageUploadForm'];









  $email= $_POST['email'];
  $pass= $_POST['password'];

 $host="localhost";
 $user="root";
 $passward="";
 $db="facebook";

 $conn =mysqli_connect("localhost","root","","facebook") or die ("Connection Failed"
);

 $sql ="INSERT INTO userdata (email,Pass) VALUES('{$email}','{$pass}')";

 $result = mysqli_query($conn, $sql) or die ("Query Successful");

mysqli_close($conn); 