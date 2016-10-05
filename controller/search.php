<?php 
require '../bootstrap.php';

$search_check = false;

if(isset($_GET['search'])){
	$search = (htmlentities(trim($_GET['search'])));
	$tables = [
	'accessories'		  => '../accessories/', 
	'wedding accessories' => '../wedding accessories/' ,
	'decoration' 		  => '../decoration/' 
	 ];
	 $results = [];
	if(empty($search)){
	    $error = "Please, write something to search for!";
	}else{
		$search_check = true;
		$db = new Database($_host , $_database , $_username , $_password);
		foreach ($tables as $table => $url) {
			$db->setQuery("SELECT `item_id` , `item_name` , `description` , `image_path` , `price` , `discount` FROM `$table` WHERE CONCAT(item_name, description , price) LIKE '%$search%'ORDER BY `item_name` ASC ");
			$db->setMode(Database::ASSOC);
			$results[$table] = $db->getAll();
		}
	}
}else{
	$error = "Please, write something to search for!";
}
