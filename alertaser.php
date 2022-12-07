<?php
include_once 'php/config.php';
session_start();
if (isset($_SESSION['unique_id'])) {
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serviços</title>
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="forms.css">
        <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
        <!-- Progress Bar -->
        <script src="js/progressbar.min.js"></script>
        <!-- Parallax -->
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
          <img id="logo" src="imgs/logohive.png" > 
          <a class="btn btn-primary" href="servicos.php" role="button">Voltar</a>
        </a>
      </nav>
    </div>
  </header>

    <div class="content">
      <?php
        include_once('php/config.php');
        if(isset($_POST['enviar_servico'])){

        $valor = $_POST['valor'];
        $detalhamento = $_POST['detalha'];
        

        $sql = ("UPDATE users SET valor = '$valor', detalhamento = '$detalhamento' WHERE unique_id = {$_SESSION['unique_id']}");
        $res = mysqli_query($conn,$sql);
        header('Location: servicos.php');
        }
      ?>

        <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
        <h1>Alerta de Serviço 🐝</h1>
        <h5>Preencha os campos:</h5>
        <br>
        <form method="POST" id="form">
            
            <div>
                <input type="text" name="valor" value="<?php echo $row['valor']; ?>" placeholder="Valor do Serviço" class="inputs " required >
            </div>
            <div>
            <textarea class="inputs" name="detalha" value="<?php echo $row['detalhamento']; ?>"   cols="25" rows="10" placeholder="Detalhamento do serviço:" required></textarea>
            </div>
            <button type="submit" name="enviar_servico">Enviar</button>
        </form>
    </div>
</body>
</html>