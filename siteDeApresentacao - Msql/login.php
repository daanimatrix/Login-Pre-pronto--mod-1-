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



    <!-- Icon -->
    <div class="fadeIn first">
      <img class="m-3" src="<?= $base?>/assets/images/Flex2-768x285.png" id="icon" alt="User Icon" style="height:110px; width: 200px;" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="<?= $base;?>/login_action.php">
    <?php  if(!empty($_SESSION['flash'])): ?>
      <?php  $_SESSION['flash']; ?>
    <?php  endif ?>
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="e-mail">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="logar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?=$base?>/signup.php">Recuperação de senha </a>
    </div>

  </div>
</div>