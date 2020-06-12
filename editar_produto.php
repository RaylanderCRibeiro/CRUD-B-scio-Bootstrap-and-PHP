<?php
include 'conexao.php';/// sempre qeu for trabaklhar com bacno de dados faça a inclusão

 $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Editar Produto</title>
    <!-- rddr link rel abaico é o boostrap -->
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
  <h4>Formulário de Cadastro</h4>
  <form action="_atualizar_produto.php" method="post"  style="margin-top:20px;">
  
  <?php
    
    $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
    $buscar = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($buscar)){

        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];

     
  ?>
  
  <div class="form-group">
    <label>Nº do produtro</label>
    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto?>" disabled> 
    <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display:none"> 

  </div>

  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
  </div>


        <div style="text-align: right;">
  <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
        </div>
    <?php }//fechamento do laço de repetição?>
  </form>
</div>




<!--esse script abaixo é o bootstrap-->
<script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>