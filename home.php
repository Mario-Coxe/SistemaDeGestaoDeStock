<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Bem-vindo, usuário <hr> Sistema de gerenciamento de estoque</h1>
         <p>Navegue para descobrir as páginas que você pode acessar!</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
