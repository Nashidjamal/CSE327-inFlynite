<?php 

	include_once("Connection.php");
	
		$pas = $_POST['aname'];
		
		echo $pas;
		
	 	$sql = "delete from airlines where Airline_Name='{$pas}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Delete successful</h1>";
	 	}else{
         	echo "<br/><h1>Delete failed</h1>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
			<br/><br/>
			<b><a href="airlines.php"> Go back to Airlines Table</a></b>
	</body>

</html>

