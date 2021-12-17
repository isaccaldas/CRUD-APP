<!DOCTYPE html>

<?php include 'db.php'; 

$sql = "select * from tasks.tb01_tarefa";

$rows = $db->query($sql);

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

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Adicionar Tarefa</h4>
								</div>
								<div class="modal-body">
									<form method="post" action="add.php">
										<div class="form-group">
											<label>Nome da Tarefa:</label>
											<input type="text" required="true" name="tarefa" class="form-control"/>
										</div>
										<input type="submit" name="salvar" value="Salvar" class="btn btn-success"/>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Table -->
					<table class="table table-striped" style="font-size: 24px">
						
						<button type="button" class="btn btn-success" style="font-size: 24px; " data-toggle="modal" data-target="#myModal">Adicionar Tarefa</button>
						<button type="button" class="btn btn-default pull-right" style="font-size: 24px; ">Print</button>
						
						<hr><br>
						<thead >
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Tarefa</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<?php while($row = $rows->fetch_assoc()):?>
								<?php // var_dump($row); ?> <!-- Faz um teste para vericar se traz os dados -->
								<?php //endwhile ?>  

								<th scope="row"><?php echo $row['id']?></th>
								<td class="col-md-10"><?php echo $row['nome']?></td>
								<td><a href="" class="btn btn-success" style="font-size: 20px">Editar</a></td>
								<td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" style="font-size: 20px">Excluir</a></td>

							</tr>
							<?php endwhile ?>
							
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</body>
</html>