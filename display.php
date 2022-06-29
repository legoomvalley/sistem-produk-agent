<!DOCTYPE html>
<?php
$NAME = $_POST['name'];
$Password = $_POST['pass'];
$EMAIL = $_POST['email'];
$PHONE = $_POST['phone'];
$GENDER = $_POST['gender'];

?>
<body>
<h2>AGENT REGISTRARION FROM</h2>
<table border="1" width="25%">
<tr>
	<td>Your Name: </td>
	<th><?php echo $NAME; ?> </th>
</tr>
<tr>
	<td>Pass: </td>
	<th><?php echo $Password; ?> </th>
</tr>
<tr>
	<td>Email: </td>
	<th><?php echo $EMAIL; ?> </th>
</tr>
<tr>
	<td>No Phone: </td>
	<th><?php echo $PHONE; ?> </th>
</tr>
<tr>
	<td>Gender: </td>
	<th><?php echo $GENDER; ?> </th>
</tr>
</table>
<br><br>
<a href="index.php">Click to register Again</a>
</body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "system_produk_agent";
	
	$conn = new mysqli ($host, $user, $pass, $db);
	
	if ($conn->connect_error)
	{
		die ("connection failed : " . $conn->connect_error);
	}
	else
	{
		$queryInsert = "insert into user(name, pass, email, role, phone,gender)
		values 
		('".$NAME."','".$Password."','".$EMAIL."','user','".$PHONE."','".$GENDER."')";
	if ($conn->query($queryInsert) === TRUE)
	{
		echo "<p style='color:blue;'>Success insert Intern record</p>";
	} else
	{
		echo "<p style='color:red;'>Error: Invalid query" .$conn->error. "</p>";
	}
}	
$conn->close();
?>

</html>