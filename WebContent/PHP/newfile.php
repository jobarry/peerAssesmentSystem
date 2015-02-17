<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="studentDB";
$port = "3306";

$conn = new mysqli($servername,$username,$password,$dbname,$port);

if($conn -> connect_error){
	
	die("Connection failed:".$conn->connect_error);
	
}
//
$sql = "INSERT INTO Forum (idForums,title) VALUES (14,'BOWEN')";

if ($conn->query($sql)===true) {
	// output data of each row
	echo "Selection complete";
} else {
	echo "Error:". $sql."<br>". $conn -> error;
}
$conn->close();

?>