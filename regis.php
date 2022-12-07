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
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <img class="imglogo"src="imgs/logohive.png" alt="">
            <header class="tlt">Cadastrar</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nome</label>
                        <input type="text" name="fname" id="fname" placeholder="Seu nome"   required>
                    </div>
                    <div class="field input">
                        <label>Sobrenome</label>
                        <input type="text" name="lname" id="lname" placeholder="Seu sobrenome"    required>
                    </div>
                </div>
                <div class="field input">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Seu e-mail" required>
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="Informe uma senha" minlength="6" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
            <div class="link">Já está cadastrado? <a href="login.php">Entrar agora</a></div>
        </section>
    </div>
    <script src="js/vali.js"></script>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>