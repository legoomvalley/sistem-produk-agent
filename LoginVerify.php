<?php
//these codes is for login process
//check userid & pwd is matched
//get form input
$EMAIL = $_POST['email'];
$PASS = $_POST['pass'];
//declare DB connection variables
$host = "localhost"; //host name
$user = "root"; //database userid
$pass = ""; //database pwd
$db = "system_produk_agent";// please write your DB name
// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connectione
if ($conn->connect_error) {
 //to check if DB connection IS NOT OK
 die("Connection failed: " . $conn->connect_error);
}
else
{
//connection OK - get records for the selected User account
$queryCheck = "select * from user where email = '".$EMAIL."'";
$resultCheck = $conn->query($queryCheck);
if ($resultCheck->num_rows == 0) { //if no record match
echo "<p style='color:red;'>Email does not exists</p>";
echo "<br>Click <a href='index.php'> here </a> to LOGIN again.";
}
else{
// record matched, get the data
while($row = $resultCheck->fetch_assoc()) {
if( $row["pass"] == $PASS ) {
//in order to asign, use or destroy session
//calling the session_start() is compulsory
session_start();
//asign userid value to session userid
$_SESSION["UID"] = $EMAIL ;
$_SESSION["UserType"] = $row["role"];
//redirect to page menu.php
header("Location:menu.php");
header("Location:menu.php");
}
else
{
echo "<p style='color:red;'>WRONG PASSWORD!!!</p>";
echo "<br>Click <a href='index.php'> here </a> to LOGIN again.";
}
}
}
$conn->close();
}
?>