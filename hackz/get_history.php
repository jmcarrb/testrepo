<?php
error_reporting(E_ALL);
try {
$location = "C:/Users/Joshua/AppData/Local/Google/Chrome/User Data/Default/History";
$database = new PDO("sqlite:" . $location . "");

$query = "SELECT * FROM urls";

$statement = $database->prepare($query);
$statement->execute();

while($row = $statement->fetch()){
	print_r($row);
}
} catch(Exception $e){
	echo $e->getMessage();
}

// adding this as a commit
?>