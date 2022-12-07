<?php
    session_start();
    if (!isset($_SESSION['unique_id'])) {
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="secchat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="titulologo">
    <img class="imglogo" src="imgs/logohive.png"> 
</div>
    <br>
    <div  class="tlt">
        <h1>Social Mídia</h1>
    </div>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users
                                                WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        <p> <strong> <?php echo $row['profissao'] ?></strong></p>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a class="btnsair" href="inicio.php" ><i class="bi bi-arrow-right-short"></i></a>
            </header>
            <div class="search">
                <span class="text">Selecione usuário para iniciar chat</span>
                <input type="text" placeholder="Nome do usuário para buscar">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
            </div>
        </section>
    </div>

    <script src="js/users.js"></script>
</body>
</html>