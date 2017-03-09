  <?php
  include("controle/seguranca.php"); // Inclui o arquivo com o sistema de segurança
  protegePagina(); // Chama a função que protege a página
?>
  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Equipe</title>
      <link rel='shortcut icon' href="img/bird.png" /> 
    </head>

    <body>
    <!-- CABEÇALHO DO SITE -->
    <div class="navbar-fixed">
      <nav class="orange z-depth-0">
          <div class="nav-wrapper container">
          <!-- pode colocar uma imagem abaixo-->
          <a href="#" class="brand-logo">
            <?php echo "Olá, " . $_SESSION['usuarioNome'];?>
            <i class="material-icons right">face</i>
          </a>
          
          <a href="" data-activates="menu-mobile" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>           

          <!-- Inicio menu dropdown-->
          <ul id="nav-mobile" class="right hide-on-med-and-down" >
              
            <li class="orange lighten-1 "><a href="#">
              <i class="material-icons right">folder_shared</i>Meus Dados</a>
            </li>

            <li>
                <a class="dropdown-button" data-activates="dropdown" data-beloworigin="true" href="#">
                <i class="material-icons right">arrow_drop_down</i>Cadastro
              </a>
            </li>

            <!-- Botão sair no nav -->
            <li>
            <a href="controle/logout.php"><i class="material-icons large">exit_to_app</i></a>
            </li>

          </ul>        
        </div>        

      </nav>
   </div>
  <!-- Menu Dropdown-->
  <ul class="dropdown-content" id="dropdown"> 
    <li><a href="">Usuário</a></li> 
    <li><a href="">Certificados</a></li>
    <li><a href="">Projetos</a></li>
    <li><a href="">Monitoria</a></li>
    <li><a href="">Eventos</a></li>    
  </ul> 

  <!-- Quando a tela ficar menor ativa esse código - menu mobile-->
  <ul id="menu-mobile" class="side-nav orange lighten-1">
    <li class="active center" id="corA">
     <i class="material-icons" id="corA">face</i><br>
       <?php echo $_SESSION['usuarioNome'];?><br>
    </li>
    <li><a href="" id="corA">Meus Dados</a></li>
    <li><a href="" id="corA">Cadastros</a></li>
        <hr style="border: 1px solid orange;">
    <li><a href="" id="corA">Certificados</a></li>
    <li><a href="" id="corA">Projetos</a></li>
    <li><a href="" id="corA">Monitoria</a></li>
    <li><a href="" id="corA">Eventos</a></li>
    <li><a href="controle/logout.php" id="corA">Sair</a></li>
  </ul>

    <!-- FIM DO CABEÇALHO DO SITE-->

    <!-- LINHA PRINCIPAL - CONTENDO TODAS AS IMAGENS -->
    <div class="row container">
      
      <!--<div class="row"><!--PRIMEIRA LINHA -->
      <!-- IMAGEM 01 -->
      <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/adriano.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Adriano Lima<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 01 -->

          <!-- IMAGEM 02 -->
      <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/alex.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Alex Ramon<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 02 -->

          <!-- IMAGEM 03 -->
        <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/edicarlos.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Edicarlos<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 03 --> 

         <!-- IMAGEM 04 -->
        <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/eduarda.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Eduarda<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 04 --> 
          <!--</div> <!-- FIM DA PRIMEIRA LINHA-->

          <!-- <div class="row"> <!-- SEGUNDA LINHA -->
           <!-- IMAGEM 05 -->
          <div class="col s6 m4 l3" id="mudarCor">
            <div class="card" >
              <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="img/juzenio.jpg">
              </div>
          
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Juzênio<i class="material-icons right">more_vert</i></span>
                <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
              </div>
              
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
               <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
               <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </p>
                <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
              </div>
              </div>
            </div> <!-- FIM DA IMG 05 -->          

           <!-- IMAGEM 06 -->
        <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/karlos.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Karlos<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 06 -->

           <!-- IMAGEM 07 -->
        <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/marcelio.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Marcelio<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 07 -->

           <!-- IMAGEM 08 -->
        <div class="col s6 m4 l3" id="mudarCor">
          <div class="card" >
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/risoaldo.jpg">
            </div>
        
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Risoaldo<i class="material-icons right">more_vert</i></span>
              <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
            </div>
            
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
             <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
             <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </p>
              <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
            </div>
            </div>
          </div> <!-- FIM DA IMG 08 -->
          <!-- </div><!-- FIM DA SEGUNDA LINHA -->

          <!-- TERCEIRA LINHA
          <div class="row"> -->
          <div class="col s6 m4 l3 hide-on-small-only"> </div><!-- completar pagina -->
           <!-- IMAGEM 09 -->
          <div class="col s6 m4 l3" id="mudarCor">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="img/thais.jpg">
              </div>
          
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Thais<i class="material-icons right">more_vert</i></span>
                <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
              </div>
              
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
               <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
               <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </p>
                <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
              </div>
              </div>
            </div> <!-- FIM DA IMG 09 -->

             <!-- IMAGEM 10 -->
          <div class="col s6 m4 l3" id="mudarCor">
            <div class="card" >
              <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="img/vitoria.jpg">
              </div>
          
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Vitória<i class="material-icons right">more_vert</i></span>
                <p><a href="http://www.dilmesipsum.com.br/">Acesse aqui</a></p>
              </div>
              
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Meus caros eleitores<i class="material-icons right">close</i></span>
               <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
               <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </p>
                <p>A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
              </div>
              </div>
            </div> <!-- FIM DA IMG 10 -->
            <div class="col s6 m4 l3 hide-on-small-only"> </div><!-- completar pagina -->
          <!--</div><!-- FIM DA TERCEIRA LINHA -->

      <!-- ############ -->      

    </div><!-- FIM DA LINHA PRINCIPAL-->

      <!-- Estilo da pagina -->
      <style type="text/css">
        body{ margin: 0 auto; }
        #mudarCor{ -webkit-filter:grayscale(100%); color: black;}
        #mudarCor:hover{-webkit-filter:grayscale(0%);transition: 1s; }
        img{width: 100px;height: 200px;}
      </style>     

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>