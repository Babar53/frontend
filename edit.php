<?php
include('db_connection.php');
$data=stripcslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$id=$mydata['sid'];

$sql="SELECT * from students where id={$id}";
	$result =$conn->query($sql);
	$row=$result->fetch_assoc();

	echo json_encode($row)


?>