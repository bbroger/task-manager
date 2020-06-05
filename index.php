<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./img/favicon.ico">

</head>
<body>
  <div id="login">
    <div class="container">
      <div class="left">
        
      </div>
      <div class="right">       
        <div class="form">           
          <form action="php/db/login.php" method="POST" class="login">
            <h1>Bem-vindo ao<span>Task Manager!</span></h1>

            <!-- Mensagem de erro -->
            <?php
              if(isset($_SESSION['nao_autenticado'])) {
            ?>  
            <div class="erro">
              <div class="icone">
                <i class="fa fa-exclamation fa-lg fa-fw" aria-hidden="true"></i>
              </div>
              <p>E-mail ou senha inválidos!</p>
            </div>
            <?php
              }
              unset($_SESSION['nao_autenticado'])
            ?>
            <!-- Mensagem de erro -->

            <div class="input">
              <input name="email" type="email" placeholder="E-mail*" required>
              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
            </div>            
            <div class="input">
              <input name="senha" type="password" placeholder="Senha*" required>
              <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>        
            
            <div class="botoes">
              <button type="submit" class="btn">Entre</button>
              <a href="php/cadastro.php" class="btn-ghost">Cadastre-se</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>