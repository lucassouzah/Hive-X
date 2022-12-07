<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="inicio.css">
    <title>Bem Vindo a Hive-X</title>
</head>
<body>
<header class="header">
<div>
    <img class="imglogo" src="imgs/logohive.png"> 
</div>
<div class="menu">
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-justify"></i></button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="tltmenu" id="offcanvasRightLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <br><br><br>
            <a class="a"href="servicos.php"><i class="bi bi-bag">Prestar Serviços</i></a>
            <br>
            <br>
            <a class="a"href="noticias.html"><i class="bi bi-clipboard2-pulse">Noticias</i></a>
            <br>
            <br>
            <a class="a"href="sup.html"><i class="bi bi-envelope-paper">Suporte</i></a>
            <br>
            <br>
            <a class="a" href="perfil.php"><i class="bi bi-person-circle">Perfil</i></a>
            <br>
            <br>
            <a class="a"href="conta.php"><i class="bi bi-tools">Configurações</i></a>
            <br>
            <br>
            <a class="a" href="users.php"><i class="bi bi-chat">Chat</i></a>
            <br>
            <br>
            <a class="a" href="php\logout.php"><i class="bi bi-x-octagon">Sair</i></a>
        </div>
    </div>
</div>
</header>  
<main>
        <div class="main-content">
        <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
            
            <h1 class="titulo">Sejá Bem Vindo a Hive-x, <?php echo $row['fname'] . " " . $row['lname']; ?></h1>
            <h2 class="subtitulo">Conclua as configurações para continuar</h2>
            <div class="buttons">
                <a class="btns" href="redes.php">Redes Socias</a>
                <a class="btns" href="portifolio.php">Portifólio</a>
            </div>
            <br><br><br><br>
            <h1 class="resul">Caso já tenha realizado as configurações pode navegar tranquilamente pelo sistema </h1>
        </div>
    </main>  

</body>
</html>