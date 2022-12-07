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
    <link rel="stylesheet" href="presservicos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Prestar Serviço</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                <img class="navbar-brand" src="imgs/logohive.png" > 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn" href="servicos.php" >Voltar</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <br>
    <h1 class="alerta">Prestadores Disponiveis</h1>
    <br>
    <div class="container">
        <table class="table table-dark table-striped">
                <thead>
                <tr>

                    <th>Nome</th>
                    <th>Profissão</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Valor</th>
                    <th>Detalhamento</th>
                    <th>Perfil</th>
                    <th>WhatsApp</th>


                    

                </tr>

                </thead>

                <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) >0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                    echo "
                <tr>


                    <td>$row[fname] $row[lname]</td>
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

                    <td><a class='btn' href='visuperfil.php' >
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                    <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                    <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                    </svg></a></td>

                    <td><a class='btn' href='https://wa.me/$row[celular]' >
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-whatsapp' viewBox='0 0 16 16'>
                    <path d='M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z'/>
                    </svg></a></td>
                    ";
                     
                ?>
        </table>
    </div>
<script src="js/modal.js"></script>
</body>
</html>