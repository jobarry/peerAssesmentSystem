<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="studentDB";
$port = "3308";

$conn = new mysqli($servername,$username,$password,$dbname,$port);

if($conn -> connect_error){
	
	die("Connection failed:".$conn->connect_error);
	
}

if($conn){
	echo "Success connecting to DB";
}

// $value = $_POST['input1'];
// $value2 = $_POST['input2'];

//$sql = "INSERT INTO Student (fName,lName, Sex, idStudent, idStudentGroup) VALUES ('John','Barry','M','123','2')";
		
		
		
//
// $sql = "INSERT INTO Forum (idForums,title) VALUES ('55','John')";

// if ($conn->query($sql)===true) {
// 	// output data of each row
// 	echo "Selection complete";
// } else {
// 	echo "Error:". $sql."<br>". $conn -> error;
// }
$conn->close();

?>