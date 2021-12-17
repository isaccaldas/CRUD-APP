<!DOCTYPE html>

<?php include 'db.php'; 

$id = $_GET['id'];

$sql = "select * from tasks.tb01_tarefa where id = '$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['salvar'])){

$nomeTarefa = $_POST['tarefa']; // Atribui o valor do input name=tarefa na variável nomeTarefa
//var_dump($row);

$sql = "update `tasks`.`tb01_tarefa` set `nome` = '$nomeTarefa' where `id` = '$id'";

$db->query($sql);

header('location:index.php');
}

?>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Crud App</title>
	</head>
	<body>
		<div class="container">
			<div><center><h1 style="margin-top: 70px; font-size: 34px; font-weight: bold;">Lista de Afazeres</h1></center>
				<div class="col-md-10 col-md-offset-1" style="margin-top: 20px">
					<hr><br>
					<h4>Atualizar Tarefa</h4>
					<br>
					<form method="post">
						<div class="form-group">
							<label>Nome da Tarefa:</label>
							<input type="text" required="true" name="tarefa" class="form-control" value="<?php echo $row['nome'] ?>" />
						</div>
						<input type="submit" name="salvar" value="Salvar" class="btn btn-success"/>
					</form>
					
				</div>
			</div>
			
		</div>
	</body>
</html>