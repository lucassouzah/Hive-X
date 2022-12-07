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
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
<body>
<div class="titulologo">
    <img class="imglogo" src="imgs/logohive.png"> 
</div>
<br>
<h1 class="tlt">Social Mídia</h1>    
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                    include_once "php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users
                                                WHERE unique_id = {$user_id}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img']; ?>" >
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                    <p> <strong><?php echo $row['profissao']; ?></strong></p>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="hidden" name="incoming_id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>">
                <input type="text" class="input-field" name="message" placeholder="Escreva uma mensagem aqui...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="js/chat.js"></script>
</body>
</html>