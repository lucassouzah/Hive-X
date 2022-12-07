<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <img class="imglogo"src="imgs/logohive.png" alt="">
            <header class="tlt">Login</header>
            <form action="#">
                <div class="error-text"></div>
                <div class="field input">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Informe seu e-mail">
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="Informe sua senha">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Entrar">
                </div>
            </form>
            <div class="link">Não está cadastrado? <a href="regis.php">Cadastrar agora</a></div>
        </section>
    </div>

    <script src="js/login.js"></script>
    <script src="js/pass-show-hide.js"></script>
</body>
</html>
