<?php
include('db_connection.php');

$data=stripcslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$stuid=$mydata['id'];
$name=$mydata['name'];
$email=$mydata['email'];
$password=$mydata['password'];

//if(!empty($name)&& !empty($email)&& !empty($password)){
	//$sql="insert into students(id,name,email,password)values('$id','$name','$email','$password')";
	//if($conn->query($sql)==true){
	//	echo "student added succesfuly";
//	}else{
//		echo "unable to add the student";
//	}
//}else{
	//	echo "fill all fields";
//	}


//inserting data or updating data

if(!empty($name) &&!empty($email) &&!empty($password)){
	$sql="insert into students(stuid,name,email,password)values('$id','$name','$email','$password') ON DUPLICATE KEY UPDATE 
	name='$name',email='$email',password='$password'";
	if($conn->query($sql)==true){
		echo"student added succesfuly";
	}
	else{
		echo "unable to add student";
	}
}
	else {
		echo "fill all fields";
	}

?>