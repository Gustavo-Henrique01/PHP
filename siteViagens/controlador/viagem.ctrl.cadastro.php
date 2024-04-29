<?php
require_once('./../modelo/Viagem.cadastro.php');
require_once('./../modelo/Viagem.class.php');
session_start(); // Corrigindo o início da sessão

if( $_SERVER['REQUEST_METHOD'] == 'GET')
    processaGET();
else
    processaPOST();

function processaPOST(){
    if(!isset($_POST['action'])){
        $MSG = "Ação não informada!";
        include('./../layout/resposta_view.php');
    }
    else{
        if($_POST['action'] == 'salvar'){

            $obj = new Cadastro(
                $_POST['nome'],
                $_POST['desc'],
                'imagem');

            $user = $_SESSION['username'];

            $deucerto = $obj->salva($user->id);

            if($deucerto){
                include('./../layout/listagem.php');
            }
            else{
                $MSG = "DEU PAUUUU!!!";
                include('./../layout/resposta_view.php');
            }
           
        }
    }
}

function processaGET(){
    if(isset( $_GET['action'] )){

        if( $_GET['action'] == 'cadastro' ){
            include('./../layout/cad.php');
        }
        else if($_GET['action'] == 'listagem'){
            include('./../layout/listagem.php');
        }
        else if($_GET['action'] == 'excluir'){
            Cadastro::Excluir($_GET['id']);
            include('./../layout/listagem.php');
        }
        else{
            $MSG = "Ação inválida!";
            include('./../layout/resposta_view.php');
        }
    }
    else{
        $MSG = "Ação não informada!";
        include('./../layout/resposta_view.php');
    }
}
?>
