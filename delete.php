<?php 

include 'db.php'; 

$id = $_GET['id'];

$sql = "delete from `tasks`.`tb01_tarefa` where id = '$id'";

$val = $db->query($sql);

if($val){

		//echo "sucesso";
		header('location:index.php');
	}

?>