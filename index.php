<!DOCTYPE html>

<html lang="PT-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>sistema agropecuário</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    
  
      <ul class="right hide-on-med-and-down">
        <li><a href="cad_perfil.php">Perfil</a></li>
      </ul>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="cad_usuario.php">Usuários</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="cad-vacina.php"> Vacinas</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="cad-animal.php"> Animais</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="cad-classe.php"> Classes</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="vacinacao.php">Vacine seu Animal</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Sair</a></li>
      </ul>
      
      
      <?php 
      
        
      if 
      (isset($_SESSION['login'])) {
                    echo "<div  class=\"text-white\">
                            <a href='img/$_SESSION[foto]' target='_blank'><img src='img/$_SESSION[foto]' width='50' height='50' 
                            class='rounded-circle' title='$_SESSION[login]' type=''></a>
                            &nbsp Olá $_SESSION[login]! &nbsp &nbsp
                            <a href='logout.php' class=\"btn btn-danger\" type=\"submit\"> SAIR </a>
                          </div> 
                ";
                }else {
                  echo "<ul class='right hide-on-med-and-down'>
                  <li><a href='paglogin.php'>Login</a></li>
                </ul>";}
                ?>
      

      <ul class="right hide-on-med-and-down">
        <li>

        </li>
      </ul>
      
     

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
    
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Agro Sistema</h1>
        <div class="row center">
          <h5 class="header col s12 light">Servindo bem por todo Brasil!</h5>
        </div>
        
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/43caaea2-c982-4c75-80d1-003f14032e9d.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Agilizando os processos</h5>

            <p class="light">Buscamos sempre optimizar todos os processos que envolvem nossas funcionalidades.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Uma grande comunidade</h5>

            <p class="light">Faça parte do grande grupo de pessoas responsáveis por sempre nos ajudar a melhorar!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Fácil Utilização</h5>

            <p class="light">Com intuito de melhorar as funcionalidades de nosso site, adaptamos ele para que fosse mais acessível.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/download (1).jpg" alt="Unsplashed background img 2"></div>
  </div>

  

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">SOBRE NÓS</h5>
          <p class="grey-text text-lighten-4">Somos uma empresa que visa a viabilização do uso de recursos necessários para a Agropecuária através de nossos recursos da web, impactando sempre positivamente no que diz respeito ao bem estar animal.</p>


        
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
