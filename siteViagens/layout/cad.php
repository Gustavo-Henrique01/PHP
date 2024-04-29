<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Item</title>
  
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #000;
  color: #fff;
  padding: 20px;
  text-align: center;
  font-size: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
}

header img {
  width: 100px;
  margin-bottom: 10px;
}

main {
  width: 500px;
  margin: 50px auto;
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

main h1 {
  font-size: 20px;
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 16px;
  margin-bottom: 5px;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

button {
  padding: 10px 20px;
  background-color: #333;
  border: none;
  border-radius: 3px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.btn-container {
  margin-top: 20px;
  text-align: center;
}

.btn {
    text-align: center;
 
}

a{
    text-decoration: none ;
    color: #fff;
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
    
    <div class="btn-container">
     <button>  <a href="./../layout/home.php">Home</a></button>
     <button> <a href="./../layout/listagem.php" class="btn">Listar Viagens</a></button>
    </div>
  </header>

  <main>
    <h1>Cadastro de Item</h1>


    <form action="./../controlador/Viagem.ctrl.cadastro.php" method="post" enctype="multipart/form-data">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="desc">Descrição:</label>
      <textarea id="desc" name="desc" required></textarea>

      <label for="imagem">Imagem:</label>
      <input type="file" id="imagem" name="imagem" accept="image/*" required>

      <input type="hidden" name="action" value="salvar">

      <button type="submit">Salvar</button>
    </form>

    
  </main>

  <footer>
    <p>Copyright &copy; 2023 Viagens</p>
  </footer>

</body>
</html>
