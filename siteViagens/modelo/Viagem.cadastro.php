<?php
require_once('./../modelo/Database.class.php');
require_once('./../modelo/Viagem.img.class.php');

class Cadastro{
    private $id;
    private $nome;
    private $descricao;
    private $foto; // Alterei de $imagem para $foto

    function __get($prop){
        return $this->$prop;
    }

    function __set($prop, $valor ){
        $this->$prop = $valor;
    }

    function __construct($nome, $descricao, $foto = null, $id = null){ // Alterei de $imagem para $foto
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->foto = ($foto == '' ? null : $foto); // Alterei de $imagem para $foto
        $this->id = $id;
    }

    function salva($id_usuario) {
        $img = new Imagem('./../uploads/');
        $temImagem = $img->gravarImagemPost($this->foto); // Alterei de $imagem para $foto
    
        // Verifica se houve sucesso ao gravar a imagem
        if ($temImagem) {
            $this->foto = $img->getNomeArquivo();
        } else {
            // Se a imagem não foi gravada com sucesso, você pode tratar esse caso
            return false;
        }
    
        $sql = 'INSERT INTO cadastros(nome, descricao, foto, id_usuario) VALUES(:nome, :desc, :foto, :id_usuario)'; // Alterei de :imagem para :foto
        $conexao = conectar();
        $query = $conexao->prepare($sql);
        $query->bindValue(':nome', $this->nome);
        $query->bindValue(':desc', $this->descricao);
        $query->bindValue(':foto', $this->foto); // Alterei de :imagem para :foto
        $query->bindValue(':id_usuario', $id_usuario);
    
        return $query->execute();
    }

    static function listarTodos(){
        $sql = "SELECT * FROM cadastros ORDER BY nome";
        $lista = array();

        $con = conectar();
        $query = $con->prepare($sql);
        $query->execute();

        while ($dado = $query->fetch()) {
            $nome = isset($dado['nome']) ? $dado['nome'] : null;
            $descricao = isset($dado['descricao']) ? $dado['descricao'] : null;
            $foto = isset($dado['foto']) ? $dado['foto'] : null; // Alterei de $imagem para $foto
            $id = isset($dado['id']) ? $dado['id'] : null;

            $obj = new Cadastro($nome, $descricao, $foto, $id); // Alterei de $imagem para $foto
            $lista[] = $obj;
        }

        return $lista;
    }

    static function excluir($id){
        $sql = "DELETE FROM cadastros WHERE id=:id";
        $con = conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->rowCount();
    }

}
?>
