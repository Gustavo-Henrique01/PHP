<!-- Recebe requisições sobre login.
Se a requisição recebida por via GET, apenas exibe o layout da página de login.
Caso a requisição recebida vier por POST, quer dizer que foi envio do formulário de login.
 -->
 <?php
//Inclui classe Usuario que gerencia acessos e logins
require_once('./../modelo/Viagem.class.php');
//inicializa sessao
session_start();

//Acesso via GET: Primeiro acesso via URL, mostra layout de LOGIN
if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
    processaGET();
}
else{ //Acesso via dados enviados por POST: Tentativa de LOGIN
   processaPOST();
}


function processaGET(){
    if (isset($_SESSION['username'])) {
        include('./../layout/home.php');
    } else {
        require('./../layout/index.php');
    }
}


function processaPOST(){
    $username = $_POST['username'];
    $senha = md5( $_POST['senha'] );

    $user = new usuario();
    $user->username = $username;
    $user->senha = $senha;

    //Pede para a classe Usuario verificar o login e senha recebidos
    $logou = $user->login();

    
    if ($logou){
        //armazena o objeto $user na sessão, na posição 'usuario'
        $_SESSION['username'] = $user;
        include('./../layout/home.php');
    }
    else{
        include('./../layout/index.php');
        echo "<script> alert('Login ou senha incorretos') </script>";
    }
}

?>