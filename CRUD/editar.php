<?php 

include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastros = "UPDATE agenda
SET nome='$nome', email='$email', telefone ='$telefone'
WHERE id = '$id'";

$query_cadastros = mysqli_query($connx,$recebendo_cadastros);


header('location: listagem.php')
//manda pra pagina quando cadastrar

?>