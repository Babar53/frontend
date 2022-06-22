<?php
include('db_connection.php');
$sql="select * from students";
$result=$conn->query($sql);
if($result->num_rows>0){
	$data=array();
	while($row=$result->fetch_assoc()){
		$data[]=$row;
	}
}
echo json_encode($data)

?>