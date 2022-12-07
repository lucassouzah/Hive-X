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
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
<div class="header">
    <img class="imglogo" src="imgs/logohive.png" >   
    <a class="btnvoltar btn-primary" href="inicio.php" role="button">Voltar</a>
</div>
<div class="container">    
    <?php
        include_once "php/config.php";
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        }
    ?>
    <div class="profile">
        <img src="php/images/<?php echo $row['img']; ?>" >
        <h3><?php echo $row['fname'] . " " . $row['lname']; ?></h3>
        <p><?php echo $row['profissao']?></p>
        <div class="share">
            <a href="<?php echo $row['facebook']; ?>" class="fab fa-facebook-f"></a>
            <a href="<?php echo $row['instagram']; ?>" class="fab fa-instagram"></a>
            <a href="<?php echo $row['linkedin']; ?>" class="fab fa-linkedin"></a>
        </div>
        <div class="buttons">
            <a href="portifolio.php" class="btn">Editar Portifolio</a>
            <a href="redes.php" class="btn">Editar Redes</a>
        </div>
    </div>

    <div class="information">

        <div class="about">
            <h1 class="tltgeral">Portifólio</h1>
            <br><br><br><br>
            <h3 class="title">Descrição</h3>
            <p><?php echo $row['descricao']; ?></p>
            <div class="box-container">
                <div class="box">
                    <h3> <span> Idade : </span><?php echo $row['idade']; ?></h3>
                    <h3> <span> Endereço : </span><?php echo $row['endereco']; ?></h3>
                    <h3> <span> Numero : </span><?php echo $row['celular']; ?> </h3>
                    <h3> <span> E-mail : </span><?php echo $row['email']; ?> </h3>
                </div>
                <div class="box">
                    <h3> <span> Profissão : </span><?php echo $row['profissao']; ?> </h3>
                    <h3> <span> Lingua : </span> Portugês, Brasil</h3>
                </div>
            </div>
        </div>

        

        <div class="experience">
            <h3 class="title">Experiencia</h3>
            <div class="box-container">
                <div class="box">
                    <p><?php echo $row['experiencia']; ?></p>
                </div>
            </div>
        </div>

        <div class="contact">
            <h3 class="title">Contate-me</h3>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-map"></i>
                    <div class="info">
                        <h3>Endereço </h3>
                        <p><?php echo $row['endereco']; ?></p>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <h3>Numero </h3>
                        <p><?php echo $row['celular']; ?></p>
                        
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <div class="info">
                        <h3>E-mail</h3>
                        <p><?php echo $row['email']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="redes">
            <h3 class="title">Redes Socias</h3>
            <div class="share">
            <a href="<?php echo $row['facebook']; ?>" class="fab fa-facebook-f"></a>
            <a href="<?php echo $row['instagram']; ?>" class="fab fa-instagram"></a>
            <a href="<?php echo $row['linkedin']; ?>" class="fab fa-linkedin"></a>
        </div>

        </div>

</div>

    
</body>
</html>