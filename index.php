<?php
  include("controle/seguranca.php"); // Inclui o arquivo com o sistema de segurança
  protegePagina(); // Chama a função que protege a página
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Bird Arretados</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
  <title>Home</title>
  <link rel='shortcut icon' href="img/bird.png" /> 
  <!--<link rel="icon" type="image/png" href="/images/mafavicon.png" />-->
</head>
<body>
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
            <a href="controle/logout.php" title="Sair"><i class="material-icons large">exit_to_app</i></a>
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
  

 <!--###########################################################-->
 <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
    
  <script>    
    //Menu mobile
     $(".button-collapse").sideNav();  
  </script>

</body>
</html>

<style type="text/css">
  #corA{color: #fff;}
</style>