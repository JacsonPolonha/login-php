<?php 
    session_start();
    if (!isset($_SESSION["USUARIO"])) {
        header("location: login.php?acao=faca_login");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-pages.css">
    <title>Página principal</title>
</head>
<body>
    <main id="content">
        <h1>Página inicial</h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, explicabo repellendus eligendi eos sed expedita aliquam. Optio incidunt eaque porro omnis, placeat eveniet laboriosam maxime? Dignissimos totam aspernatur nam id!
        </p>
        <button><a href="login.php?logout=sair">Sair</a></button>
        <footer>
            <p>Desenvolvido por Jacson Polonha</p>
        </footer>
    </main>
</body>
</html>