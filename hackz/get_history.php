<?php
error_reporting(E_ALL);
try {
$location = "C:/Users/Joshua/AppDatasLOL/Local/Google/Chrome/User Data/Default/History";
$database = new PDO("sqlite:" . $location . "");
$haha = false;
$query = "SELECT * FROM urls";

$statement = $database->prepare($query);
$statement->execute();

while($row = $statement->fetch()){
	var_dump($row);
}
} catch(Exception $e){
	echo $e->getMessage();
}

// adding this as a commit
?>
