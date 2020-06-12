<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <!-- esse link rel abaixo é o boostrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">    
    <style type="text/css">

        #tamanhoContainer{
            width:500px;
       
        }
       
        #botao{
            background-color:#FF1168;
            color:#fff;
            font-weight:bold;
        }
    </style>


  </head>
  <body>
<div class="container" id="tamanhoContainer" style="margin-top:40px;">

        
<div style="text-align:right">
          <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

  <h4>Formulário de Cadastro</h4>
  <form action="_inserir_produto.php" method="post"  style="margin-top:20px;">
  <div class="form-group">
    <label>Nº do produtro</label>
    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o Produto" autocomplete="off" required> 
  </div>

  <div class="form-group">
    <label>Nome do produtro</label>
    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o Nome" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Categoria</label>
    <select class="form-control" name="categoria">
        <?php
          include 'conexao.php';
          $sql = "SELECT * FROM categoria";
          $buscar = mysqli_query($conexao,$sql);

          while($array = mysqli_fetch_array($buscar)){
            //o whilw irá passar catwegoria por categoria
            
            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['categoria'];

         
        ?>

          <option><?php echo $nome_categoria?></option>
      <?php}?>
    </select>
  </div>
 
  <div class="form-group">
    <label>quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Fornecedor</label>
    <select class="form-control"  name="fornecedor" >
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>

        <div style="text-align: right;">
  
  <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
        </div>
  </form>
</div>




<!--esse script abaixo é o bootstrap-->
<script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>