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

        $sql = "SELECT * FROM categoria order by nome_categoria ASC  ";
        $buscar = mysqli_query($conexao,$sql);

        while($array = mysqli_fetch_array($buscar)){

          $id_categoria = $array['id categoria'];
          $nome_categoria = $array['nome_categoria'];
    

        ?>
        <option><?php echo $nome_categoria ?></option>
        <?php } ?>  

      </select>
      </div>
 
  <div class="form-group">
    <label>quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Fornecedor</label>
    <select class="form-control"  name="fornecedor" >
      
      <?php 
        include 'conexao.php';
        $sql2 = "SELECT * FROM fornecedor";
        $buscar2 = mysqli_query($conexao,$sql2);

        while ($array2 = mysqli_fetch_array($buscar2)){
          $id_fornecedor = $array2['id_form'];
          $nome_fornecedor = $array2['nome_form'];

      ?>
          <option><?php echo $nome_fornecedor ?></option>
     <?php } ?> 
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