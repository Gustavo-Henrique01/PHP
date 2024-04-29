<?php
require_once('./../modelo/Database.class.php');
class usuario{
    private $id;
    private $username;
    private $senha;

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $valor){
        $this->$prop = $valor;
    }

    /**
     * Retorna se o login e senha do usuário estão corretos
     */
    function login(){
        $sql = "SELECT * FROM usuarios WHERE usuarios.username LIKE :username AND usuarios.senha LIKE :senha";
        $conexao = conectar();//Conecta ao BD
        $query = $conexao->prepare($sql); //prepara sentença
        $query->bindValue(':username', $this->username);//liga parâmetro :login
        $query->bindValue(':senha', $this->senha);//liga parâmetro :senha
        $query->execute();//executa sentença preparada

        //veio algum dado
        if( $dados = $query->fetch()){
            $this->id =  $dados['id'];
            return true;
        }
        else{ //sem dados
            return false;
        }
    }

}