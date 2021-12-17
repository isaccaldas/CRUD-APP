<?php 

$db = new Mysqli; // criação de uma variável nomeada como db que instancia o objeto Mysqli

$db->connect('localhost','root','1234','tasks'); // Chama o método para fazer a conexão com o banco de dados. 

//Teste para verificar se o banco está conectado.(retirar a !)
if(!$db){

	echo "Banco conectado com Sucesso!";
}   


  


?>