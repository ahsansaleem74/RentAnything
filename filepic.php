<?php
if(isset($_FILES['image'])){
	

$file_name= $_FILES['image']['name'];
$file_size= $_FILES['image']['size'];
$file_tmp= $_FILES['image']['tmp_name'];
$file_type= $_FILES['image']['type'];

move_uploaded_file($file_tmp,"serverphotos/". $file_name);

}



?>





<html>

<body>
	
<form action="" method="POST" enctype="multipart/form-data">

	<input type="file" name="image"/><br><br>
	<input type="submit"/>
</form>


</body>

</html>