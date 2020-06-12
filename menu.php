<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>

<?php
  session_start();
  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
  }

  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario ='$usuario' and status='Ativo' ";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

?>


    
    <div class="container">

    <br>

    <div class="row" >
<?php
if(($nivel == 1)||($nivel == 2)){

?>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produtos</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionarr_produto.php" class="btn btn-primary">Cadastrar Produtos</a>
      </div>
    </div>
  </div>


  <?php } ?>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Lista de Produtos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adicionar categoria de produtos.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar Usuários cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastra Usuários</h5>
        <p class="card-text">Aprovar Usuários cadastrados.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
</div>
</div>


    <script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>