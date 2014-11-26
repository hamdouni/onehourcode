<?php 
	$list = $_POST['list'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];

	file_put_contents("list.txt", $list);

	$inscription = "$date,$name,$email\n";
	file_put_contents("inscription.txt", $inscription, FILE_APPEND | LOCK_EX);
	
	echo "OK";
?>
