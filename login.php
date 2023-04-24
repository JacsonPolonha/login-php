<?php 
    session_start();
    define("USER", "admin");
    define("PASS", "1234");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <title>Login</title>
</head>
<body>
    <main id="content">
        <h1>Faça login</h1>
        
           <form  method="post">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario">

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">

                <button type="submit" class="btn">Entrar</button>

           </form>
        
        <footer>
            <p>Desenvolvido por Jacson Polonha</p>
        </footer>
    </main>

</body>
</html>
<?php
    if (isset($_GET["logout"])) {
        if ($_GET["logout"] == 'sair') {
            unset($_SESSION["USUARIO"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
            $user = $_POST["usuario"];
            $pass = $_POST["senha"];
            if ($user == USER && $pass == PASS) {
                $_SESSION["USUARIO"] = $user;
                header("location: index.php");
            } else {
                echo "Usuário ou senha inválidos!";
            }
        }
    }
?>