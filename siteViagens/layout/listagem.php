<?php 
require_once('./../modelo/Viagem.cadastro.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 1em;
        }

        nav a {
            color: white;
            margin: 0 1em;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 2em;
        }

        #container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            max-width: 100%;
            overflow: auto;
        }

        footer {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 1em;
            bottom: 0;
            width: 100%;
        }

        .card {
            flex: 0 0 calc(33.333% - 20px);
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            position: relative; /* Adicionado para posicionar o ícone de exclusão de forma absoluta */
            text-align: center;
        }

        .delete-link {
            position: absolute;
            top: 5px;
            right: 5px; /* Ajuste a distância da direita conforme necessário */
            text-decoration: none;
            color: #ff0000;
            font-size: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .delete-link:hover {
            color: #cc0000;
        }

    .bota{
  padding: 10px 20px;
  background-color: #333;
  border: none;
  border-radius: 3px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}
    </style>
</head>
<body>
    <header>
        <h1>Cadastrados</h1>
        <nav>
         <button class="bota">   <a href="./../layout/home.php">Home</a></button> 
         <button class="bota">    <a href="./../layout/cad.php">Cadastrar</a></button> 
        </nav>
    </header>

    <main>
        <div id="container">
            <?php 
                $lista = Cadastro::listarTodos();
                foreach ($lista as $cadastro) {
                    if ($cadastro->foto == null) {
                        $cadastro->foto = './../uploads/default.png';
                    }

                    echo "<div class='card'>".
                            "<h3>$cadastro->nome</h3>".
                            "<a class='delete-link' href=\"./../controlador/viagem.ctrl.cadastro.php?action=excluir&id=$cadastro->id\">&#10060;Excluir</a>".
                            "<img src=\"$cadastro->foto\" alt=\"foto do bicho\">".
                            "<p>$cadastro->descricao</p>".
                        "</div>";
                }
            ?>
        </div>
    </main>

    <footer>
        <p>Copyright &copy; 2023 Viagens</p>
    </footer>
</body>
</html>
