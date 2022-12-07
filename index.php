<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hive-x</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
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
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="imgs/logohive.png" > 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a>
            <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>

        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/baner1.jpg" class="d-block w-100" alt="Projetos de e-commerce">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Precisa de um profissional?</h5>
              <p>Conte conosco, temos diversos profissionais autonômos disponíveis.</p>
              <a href="login.php" class="main-btn">Entrar</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgs/banner2.png" class="d-block w-100" alt="Engenharia de software">
            <div class="carousel-caption d-md-block">
              <h2>Quer divulgar seus serviços?</h5>
              <p>Nossa site está pronto para divulgar, venha trabalhar com nós.</p>
              <a href="login.php" class="main-btn">Entrar</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgs/baner3.jpg" class="d-block w-100" alt="Manutenção em software">
            <div class="carousel-caption d-md-block">
              <h2>Hive-X?</h5>
              <p>Somos um portal de divulgação de serviços independentes, se cadastre para obter uma mão de obra ou 
                para disponibilizar.</p>
              <a href="login.php" class="main-btn">Entrar</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre a Hive-X</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="imgs/fundoab.jpg">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Um Site que se preocupa com os clientes</h3>
                <p>Nosso site é pensado para o profissional que busca uma oportunidade de trabalho de forma individual.</p>
                <p>Após disponibilizar seu serviço, outras pessoas poderão entrar em contato em busca de fechar negócio.</p>
                <p>E assim que acessar nosso layout de profissões, tera acesso a profissionais de todas as categorias, prontos para o trabalho que você precisa, pelo preço mais justo para ambos.</p>
                <p>Veja outros diferenciais:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Chat global de mensagens</li>
                  <li><i class="fas fa-check"></i> Layout responsivo para todos os dispositivos</li>
                  <li><i class="fas fa-check"></i> Metodos de avaliação para definir o mais apropriado a você</li>
                </ul>
              </div>
            </div>
          </div>

      </div>
      <div id="services-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h3 class="main-title">Nossas especialidades</h3>
            </div>
            
            <div class="col-md-4 service-box">
              <i class="fas fa-shopping-cart"></i>
              <h4>Prestação de Serviço</h4>
              <p>Temos uma plataforma própria de prestação de serviço que se adapta a qualquer profissão do mercado.</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-paint-brush"></i>
              <h4>Design Criativo</h4>
              <p>Nos optamos por um desgin simples para fácil compreensão.</p>
            </div>
            
            <div class="col-md-4 service-box">
              <i class="fas fa-hands-helping"></i>
              <h4>Suporte 24/7</h4>
              <p>Você sempre terá alguem da equipe disponível para te responder através do email</p>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Dados da empresa -->
      <div id="data-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-xs-6 circle-box">
              <div id="circleA"></div>
              <p>Avaliações Positivas</p>
            </div>
            <div class="col-md-4 col-xs-6 circle-box">
              <div id="circleB"></div>
              <p>Alerta de prestação de serviço</p>
            </div>
            <div class="col-md-4 col-xs-6 circle-box">
              <div id="circleC"></div>
              <p>Colaboradores</p>
            </div>  
          </div>
        </div>
      </div>
      <!-- Time -->
      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nosso time</h3>
            </div>
            <div class="col-md-3">
              <div class="card">
                <br>
                <img src="imgs/pablo.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title">Pablo Oliveira</h5>
                  <p class="card-text">Designer Web</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img src="imgs/lucas.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title">Lucas Souza</h5>
                  <p class="card-text">Desenvolvedor Web</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Trabalhe conosco -->
      <div id="apply-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 apply-box" ><img class="logobaner" src="imgs/logohive.png"><br><br><br><h1 class="tltlogo">Sistema de Prestação de Serviço</h1></div>
            <div class="col-md-6 apply-box" id="pattern-img">
              <h4>Venha fazer parte do nosso time!</h4>
              <p>Aqui você terá a chance de encontrar profissionais capacitados de acordo com seus requisitos</p>
              <p>Clique no botão abaixo e confira os benefícios e as posições em aberto.</p>
              <a href="regis.php" class="main-btn" id="apply-btn">Cadastre-se ja</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Portfólio -->
     
      
      
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (41)99717-6958 ou (41)99581-1231</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> hivex10@gmail.com</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">localização: </span>Curitiba,PR</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="https://api.staticforms.xyz/submit" method="POST">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
                <input type="hidden" name="accessKey" value="19b2109b-e876-45a1-9410-ab384e7e7242">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por <a  target="_blank">Pablo Oliveira e  Lucas Souza</a> &copy; 2022</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>
      