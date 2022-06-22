<?php
include('db_connection.php');
$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data, true);
$id= $mydata['delete'];
 //Deleting student
 if(!empty($id)){
 	$sql="DELETE FROM students where id={$id}";
 		if($conn->query($sql)==true){
		echo"student deleted succesfuly";
	}else{
		echo "unable to add student";
	}


 }
?>