<?php
session_start();

if(isset($_SESSION['UID'])) {
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Add product</title>
<!-- <style>
body{
	background-image:url(login.jpg);
	background-repeat: no-repeat;
	background-size: 30000px 10000px;
	}
</style> -->
</head>
<body>
<center>
<h1>Add Product</h1>
<h2>Upload Your Image Product </h2>
<Form name="productForm" action="product_display.php" method="POST" enctype="multipart/form-data">

<!-user kena insert photo atau video(bukan muka dia) dan wish apa yg user nk tulis)->

Product Name :
<input type="text" name="produk" require><br><br>

Product Photo : 
<input type="file" name="UploadPhoto" id="UploadPhoto" require><br><br>

Product Quantity :
<input type="number" name="qty" min="1" require><br><br>

Product price :
<input type="number" name="price" min="0.00" max="10000.00" step="0.01" require><br><br>

Details : 
<br><textarea name="detail" rows="5" cols="80"></textarea><br><br>
	

<input type="reset" value="Cancel">
<input type="submit" value="Post Your Product">
<br><br>
Click <a href="menu.php" >Here</a> to Menu
</Form>
</center>
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