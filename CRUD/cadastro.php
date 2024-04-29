<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastros = "INSERT INTO agenda
values ('','$nome','$email','$telefone')";

$query_cadastros = mysqli_query($connx,$recebendo_cadastros);

header('location: listagem.php')
//manda pra pagina quando cadastrar

?>