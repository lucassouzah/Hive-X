<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="servicos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Prestar Serviço</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                <img class="navbar-brand" src="imgs/logohive.png" > 
                <a class="btn " href="presservicos.php" >Prestadores</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn " href="alertaser.php" >Alterar alerta</a>
                    </li>
                </ul> 
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn" href="inicio.php" >Voltar</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <br>
    <h1 class="alerta">Seu Alerta de Serviço</h1>
    <br>
    <div class="container">
        <table class="table table-dark table-striped">
                <thead>
                <tr>

                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Profissão</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Valor</th>
                    <th>Opções</th>

                </tr>

                </thead>

                <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                    echo "
                <tr>


                    <td>$row[fname] $row[lname]</td>
                    <td>$row[email]</td>
                    <td>$row[profissao]</td>
                    <td>$row[cidade]</td>
                    <td>$row[estado]</td>
                    <td>$row[valor]</td>

                    <td>
                        <div onclick='acao()' class='btn'>Detalhes</div>
                        <div class='modal'>
                            <div onclick='fechar()' class='fechar'>Fechar</div>
                            <br><br>
                                <div class='label'>
                                    <label>Detalhamento:</label>
                                </div>
                                <br> 
                                <div>$row[detalhamento]</div>    
                        </div>
                    </td>
                    ";
                     
                ?>
        </table>
    </div>
<script src="js/modal.js"></script>
</body>
</html>