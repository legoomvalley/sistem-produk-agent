<?php
session_start();

if(isset($_SESSION['UID'])) {
	
?>

<html>
<head>
<title>System Produk and Agent</title>
<style>
body 
/* {background-image:url(menu_page.jpg);} */
h2 {background-color:chocolate;}
</style>
</head>
<body>
<center>
<h2>Menu Produk</h2>
<h3>Welcome, Hi <i style="color:purple;"><?php echo $_SESSION['UID'] ?></i></h3>

<form action="phpSearch.php" method="post">
Search <input type="text" name="search"><br><br>
<input type ="submit" value="Cari">
</form>

<p>Choose your menu : </p>
<?php
	if ($_SESSION["UserType"] == "admin"){
	?>
	<a href= "user_profile_all.php">See user profile</a><br><br>
	<a href= "product_edit_view.php">Edit your product details</a><br><br> 
	<a href= "product_delete_view.php">Delete your product record</a><br><br>	
	<a href= "product_view.php">View all product list</a><br><br>
	
	<?php
	}
	else{
?>
	<a href= "user_profile.php">See my profile</a><br><br>
	<a href= "product_form.php">Post more product</a><br><br>
	<a href= "product_edit_view_user.php">Edit your product details</a><br><br>
	<a href= "product_delete_view_user.php">Delete your product record</a><br><br>
	<a href= "product_view_other.php">View other product</a><br><br>	
	<a href= "product_view_user.php">View your product list</a><br><br>
	<?php
	}
?>
<a href= "logout.php">Logout</a><br>
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