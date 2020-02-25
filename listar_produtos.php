<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Listagem de Produtos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
  </head>


  <body>
    <div class="container" style="margin-top: 40px">

    <div style="text-align:right">
       <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

    <center>
    <h3>Lista de Produtos</h3>
    </center>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">N° dos Produtos</th>
      <th scope="col">Nome dos Produtos</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
   
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `estoque` ";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)){///para cada linha que a nossa consulta achar ele irá armazenar no array

            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];
        

    ?>
    <tr>
      <td><?php echo $nroproduto //tem que seguir a mesma sequencia do que as colunas para preencher a celular correta ?></td>
      <td><?php echo $nomeproduto ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $fornecedor ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_produto.php? id=<?php echo $id_estoque?>" role="button"><i class="far fa-edit"></i>Editar</a>
          <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_produto.php? id=<?php echo $id_estoque?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
      </td>
    </tr>

    <?php }//o laço de repetição while é fechado aqui para que ele preencha cada <td> ?>

   
    
    </table>


    </div>


  <script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>