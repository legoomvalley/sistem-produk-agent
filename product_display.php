<?php
session_start();

if(isset($_SESSION['UID'])) {
	
?>

<!DOCTYPE html>
<html>
<head>
<title>System Produk and Agent</title>
</head>
<body>
<h1>System Produk and Agent</h1>
<h2>Upload your Product</h2>

<?php 

$DETAIL = $_POST["detail"];
$product = $_POST["produk"];
$quantity = $_POST["qty"];
$PRICE = $_POST["price"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$DateTime = date("d/m/y h:i:s");
$DATA = $DateTime;


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["UploadPhoto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["UploadPhoto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
} else {
	
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["UploadPhoto"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["UploadPhoto"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


//declare DB connection variables
$host = "localhost"; //host name
$user = "root"; //database userid 
$pass = ""; //database pwd
$db = "system_produk_agent";// please write your DB name 

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection

if ($conn->connect_error) { //to check if DB connection IS NOT OK
  die("Connection failed: " . $conn->connect_error); // display MySQL error
}

else
{  //connection OK 
   //put query to insert record
	
		
	$queryInsert = "insert into produk (name, photo, user, date, quantity, price, details )
					VALUES ('".$product."', '".$target_file."', '".$_SESSION["UID"]."', '".$DATA."',
					'".$quantity."', '".$PRICE."', '".$DETAIL."')";
	
	//to execute $queryInsert query
	if ($conn->query($queryInsert) === TRUE) {
	  echo "<br>";
	  echo "<p style='color:blue;'>Your product is success</p>";
	  echo "<a href=product_view_user.php> View your Wish here </a>";
	  echo "<br><br>";
	  echo "<a href=product_form.php> Post more product here </a>";
	} else {
	  echo "<p style='color:red;'>Error: Invalid query ". $conn->error. "</p>";
	}

}

$conn->close();	
}	
  
?>
<br><br>
Click <a href=menu.php> Menu here </a>;
</body>
</html>

<?php
}
else
{
	echo "No session exits or session has expired. Please log in again.";
	echo "<a href=index.php> Login </a>";
}
?>