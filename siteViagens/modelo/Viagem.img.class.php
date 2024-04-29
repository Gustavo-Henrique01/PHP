<?php


class Imagem {
    private $pathPasta;
    private $nomeArquivo;

    public function __construct($nomepasta) {
        $this->pathPasta = $nomepasta;
    }

    public function getNomeArquivo() {
        return $this->nomeArquivo;
    }

    public function gravarImagemPost($nomeImagem) {
        // Verifica se a imagem foi enviada
        if (!isset($_FILES[$nomeImagem]) || $_FILES[$nomeImagem]["error"] !== UPLOAD_ERR_OK) {
            return false;
        }

        // Se não existe a pasta, cria
        if (!file_exists($this->pathPasta)) {
            mkdir($this->pathPasta, 0777, true);
        }

        // Cria um nome único baseado no tempo atual e um identificador único
        $nomeUnico = time() . uniqid(rand(), true);
        $nomeUnico .= '_' . basename($_FILES[$nomeImagem]['name']);
        // Monta o caminho onde será salvo o arquivo
        $destino = $this->pathPasta . DIRECTORY_SEPARATOR . $nomeUnico;

        // Move o arquivo para o destino
        if (move_uploaded_file($_FILES[$nomeImagem]["tmp_name"], $destino)) {
            $this->nomeArquivo = $destino;
            return true;
        } else {
            return false;
        }
    }
}

?>