<?php 

include 'db.php'; 

if(isset($_POST['salvar'])){

	$nomeTarefa = $_POST['tarefa']; // Atribui o valor do input name=tarefa na variável nomeTarefa

	$sql = "insert into `tasks`.`tb01_tarefa` (`nome`) values ('$nomeTarefa')";

	$val = $db->query($sql);

	if($val){

		//echo "sucesso";
		header('location:index.php');
	}

}


?>