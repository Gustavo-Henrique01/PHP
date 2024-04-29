<?php
function conectar(){
    $host = 'localhost';
    $loginBD = 'postgres';
    $passBD = 'postgres';
    $conexao = null;
    try{
        //abre uma conexão com o BD e armazena (conectado) em $conexao
        $conexao = new PDO("pgsql:host=$host;port=5432;dbname=bdtrabalho",$loginBD,$passBD);
        //seta flag do obj conexão dizendo que quando ocorrer algum erro de SQL, lançar uma exceção PHP
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    }
    catch(Exception $e){
        print 'ERRO DE CONEXAO: '.$e->getMessage();
    }
    return $conexao;
}


?>