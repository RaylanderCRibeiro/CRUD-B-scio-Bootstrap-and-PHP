<?php
include 'conexao.php';/// sempre qeu for trabaklhar com bacno de dados faça a inclusão

 $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formulário de Edição</title>
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
  <h4>Formulário de Edição</h4>
  <form action="_atualizar_categoria.php" method="post"  style="margin-top:20px;">
  
  <?php
    
    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
    $buscar = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($buscar)){

        $id_categoria = $array['id_categoria'];
        $nome_categoria = $array['nome_categoria'];
        

     
  ?>
  
  <div class="form-group">
    <label>Nome Categoria</label>
    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nome_categoria?>" > 
    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria?>" style="display:none"> 

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