<?php
try{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "b2c";	
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

}catch(PDOException $e){
	echo json_encode($e->getMessage());
}
?>