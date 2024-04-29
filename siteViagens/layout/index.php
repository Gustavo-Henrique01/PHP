<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.login-container {
    width: 300px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-container h1 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.input-field {
    margin-bottom: 15px;
}

.input-field label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

.input-field input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

.btn-container {
    text-align: center;
}

.btn-container button {
    padding: 10px 20px;
    background-color: #333;
    border: none;
    border-radius: 3px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

header {
    background-color: #000;
    color: #fff;
    padding: 20px;
    text-align: center;
    font-size: 24px;
}

header img {
    width: 100px;
    margin-bottom: 10px;
}

footer {
    background-color: #000;
    color: #fff;
    padding: 20px;
    text-align: center;
    font-size: 12px;
}

    </style>

</head>

<body>

    <header>
        <h1>Viagens</h1>
    </header>

    <div class="login-container">
        <h1>Login</h1>
        <form method="post" action="./../controlador/viagem.ctrl.php" >
            <div class="input-field">
                <label for="usuario">Usuário:</label>
                <input required name="username" type="text" placeholder="Usuário">
            </div>
            <div class="input-field">
                <label for="senha">Senha:</label>
                <input required name="senha" type="password" placeholder="Senha">
            </div>
            <div class="btn-container">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>

    <footer>
        <p>Copyright &copy; 2023 Viagens</p>
    </footer>

</body>
</html>

</body>
</html>