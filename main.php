<?php

$email = $password ="";

$email=$_POST['email'];
$password = $_POST['password'];

$dbc = mysqli_connect('localhost', 'root','','pyqprecord')
or die('error connecting to mysql server');

$query ="INSERT INTO studentrecord(email,password) values('$email','$password')";

$result =mysqli_query($dbc, $query)
or die("error querying database");

mysqli_close($dbc);
	
echo "thanku for submitting the form";	

?>
