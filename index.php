<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>Entrar</h1>
       <h4>Sistema de gerenciamento de estoque</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuário</label>
              <input type="name" class="form-control" name="username" placeholder="Usuário">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Senha</label>
            <input type="password" name= "password" class="form-control" placeholder="Senha">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%; width: 100%" >Acessar</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
