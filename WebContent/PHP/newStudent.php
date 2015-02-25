

<html>
<head>
</head>
<title>
</title>
<body>
<link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<?php

require_once('newfile.php');

// $fname = $_POST['fName'];
// $lname = $_POST['lName'];
// $sex = $_POST['sex'];
// $studentid = $_POST['studentId'];
// $group = $_POST['group'];

// $sql = "INSERT INTO Student (fName, lName, Sex, idStudent, idStudentGroup) VALUES ('$fname','$lname','$sex','$studentid','$group')";
$conn = new mysqli($servername,$username,$password,$dbname,$port);


// $sql = "INSERT INTO PostBody (idPost,postBody) VALUES ('66','Hello')";
 $sql = "INSERT INTO Student (fName,lName, Sex, idStudent, idStudentGroup) VALUES ('John','Barry','M','123','2')";

if ($conn->query($sql)===true) {
	// output data of each row
	echo "Selection complete";
} else {
	echo "Error:". $sql."<br>". $conn -> error;
}
?>
<div id="login-overlay" class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel">Login to PeerMate</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-6">
<div class="well">
<form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
<div class="form-group">
<label for="username" class="control-label">Username</label>
<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
<span class="help-block"></span>
</div>
<div class="form-group">
<label for="password" class="control-label">Password</label>
<input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
<span class="help-block"></span>
</div>
<div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
<div class="checkbox">
<label>
<input type="checkbox" name="remember" id="remember"> Remember me
</label>
</div>
<button type="submit" class="btn btn-success btn-block">Login</button>
<a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
</form>
</div>
</div>
<div class="col-xs-6">
<p class="lead">Sign-up now <span class="text-success">To...</span></p>
<ul class="list-unstyled" style="line-height: 2">
<li><span class="fa fa-check text-success"></span>- Submit your reports</li>
<li><span class="fa fa-check text-success"></span>- View reports</li>
<li><span class="fa fa-check text-success"></span>- See your grade</li>
<li><span class="fa fa-check text-success"></span>- See how you rank</li>
<li><span class="fa fa-check text-success"></span>- View forums <small>(and post)</small></li>
<li><a href="/read-more/"><u>Read more</u></a></li>
</ul>
<p><a href="register.php" class="btn btn-info btn-block">Sign-up now!</a></p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

