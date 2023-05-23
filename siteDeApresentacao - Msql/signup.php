<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown" style="background-image: url('assets/images/fundo.jpg');background-repeat: no-repeat;background-size: cover; opacity: 0.2;">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Header -->
    <?php  
        require 'partials/header.php';
        require 'config.php';
    ?>


    <section>
      <!-- Icon -->
      <div class="fadeIn first">
        <img class="m-3" src="<?= $base?>/assets/images/Flex2-768x285.png" id="icon" alt="User Icon" style="height:80px; width: 150px;" />
        <h3 class="" style="color:#FFF238;text-shadow: 1px 1px 2px rgba(146, 164, 179, 0.4);">CADASTRO DE USUARIO</h3>
      </div>

      <!-- Login Form -->
      <form method="POST" action="<?= $base;?>/signup_action.php">
      <?php  if(!empty($_SESSION['flash'])): ?>
        <?php  $_SESSION['flash']; ?>
      <?php  endif ?>
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="Digite seu nome completo">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Digite seu e-mail">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder=" Digite sua Senha">
        <input type="submit" class="fadeIn fourth" value="Fazer cadastro">
      </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?=$base?>/login.php">Já tem conta? faça o login </a>
    </div>
    </section>

    <!--Para criação de mascara -->
    <!-- <script src="https://unpkg.com/imask"></script>
    <script>
      IMask(
        document.getElementById("birthdate"),
        {mask:'00/00/0000'}
      );
    </script> -->
  </div>
</div>