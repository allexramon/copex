<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <title>Bird Arretados</title>
  <link rel='shortcut icon' href="img/bird.png" /> 
  <style type="text/css">  
    body { background: orange; display: flex; min-height: 100vh; flex-direction: column;}
    main {  flex: 1 0 auto;}    
     .input-field label {color: grey; } .input-field input[type=text]:focus + label {color: #EC7D00;}
     .input-field input[type=password]:focus + label {color: #EC7D00;}
     .input-field input[type=text]:focus {color: #9e9e9e;border-bottom: 1px solid #EC7D00;box-shadow: 0 1px 0 0 #EC7D00; }
     .input-field input[type=password]:focus {color: #9e9e9e;border-bottom: 1px solid #EC7D00;box-shadow: 0 1px 0 0 #EC7D00;}
     .input-field input[type=text].valid {color:#424242;border-bottom: 1px solid #EC7D00;box-shadow: 0 1px 0 0 #EC7D00;}
     .input-field input[type=password].valid {color:#424242; border-bottom: 1px solid #EC7D00;box-shadow: 0 1px 0 0 #EC7D00;}
     .recSenha{color:#616161;} .recSenha:hover{color:#4fc3f7;} .recSenha:focus{color:green;}
   </style>		
</head>
<body>
  <div class="row hide-on-small-only"></div> <!-- vai sumir para smartphone-->

  <div class="container" style="background: #fafafa; border-radius: 25px;">
  
  <div class="z-depth-5" style="border-radius: 25px;"> <!-- Shadow -->
   
    <div class="row center"><!-- Logo centralizada-->
      
      <div class="container">
      <div class="section">
        <div class="col l3 hide-on-small-only"> </div>

        <div class="col s12 m8 l6 "> 
          <i class="material-icons large" style="color:#EC7D00;" >assignment_ind</i>
        </div>
        <div class="col l3 hide-on-small-only"></div>
      </div><!-- fim da section -->
      </div><!--fim container --> 
    </div> <!-- fim da linha -->

    <div class="row">
    <div class="container">
      <div class="section">
          <div class="col l3 hide-on-small-only"></div>            
          <div class="row">

            <form class="col s12" method="post" action="controle/valida.php">
              <div class="row" >
                <div class="input-field col s12 m6 l6">
                  <i class="material-icons prefix" style="color:#EC7D00;">account_circle</i>
                  
                  <input id="icon_prefix" type="text" name="usuario" required="true">
                  <label for="icon_prefix">Usuário</label>
                </div>

              <div class="input-field col s12 m6 l6">
                  <i class="material-icons prefix" style="color:#EC7D00;">lock</i>
                  
                  <input id="icon_password" type="password" name="senha"  required="true">
                  <label for="icon_password">Senha</label>
                </div>
              </div>

               <div class="center">
                 <button class="btn waves-effect waves-light" style="background:#EC7D00;" type="submit" name="action">Logar</button>
              </div>
            </form>

          </div>         
          
          <div class="col l3 hide-on-small-only"> </div>

        </div><!-- fim da section -->
        </div> <!-- fim container-->
      </div> <!-- fim da linha --> 

      <div class="center">
       <!-- <label><a href="#">Esqueci minha senha</a></label> -->
        <a class="recSenha" href="#!">Esqueci minha senha</a>
      </div> <!-- linha abaixo do botão logar-->
      <br>

     <!-- #################  Footer ################## -->
     
    <footer class="page-footer grey lighten-4" style="border-radius: 0px 0px 25px 25px;">
       <div class="footer-copyright grey lighten-3" style="border-radius: 0px 0px 25px 25px;">
          <div class="container" style="color:grey;">
             © 2014 Copyright Bird Arretado
            <a class="hide-on-small-only right" href="#!">
              <img src="img/facebook.png" class="responsive-img" style="margin: 0px 5px 0px 5px;">
            </a>
            <a class="hide-on-small-only right" href="#!">
              <img src="img/instagram.png" class="responsive-img" style="margin: 0px 5px 0px 5px;">
            </a>
          </div>
      </div>
    </footer>

  </div> <!-- fim do shadow-->

  </div><!-- fim div container -->

<!--###########################################################-->
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>