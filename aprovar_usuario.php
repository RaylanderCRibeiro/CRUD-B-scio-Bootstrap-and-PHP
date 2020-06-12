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
       <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

    <center>
    <h3>Lista de Usuários</h3>
    </center>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Usuário</th>
      <th scope="col">E-mail de Usuário</th>
      <th scope="col">Nível de  Usuário</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
   
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo' ";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)){///para cada linha que a nossa consulta achar ele irá armazenar no array

            $id_usuario = $array['id_usuario'];
            $nome_usuario = $array['nome_usuario'];
            $mail = $array['mail_usuario'];
            $nivel = $array['nivel_usuario'];
            
        

    ?>
    <tr>
      <td><?php echo $nome_usuario //tem que seguir a mesma sequencia do que as colunas para preencher a celular correta ?></td>
      <td><?php echo $mail //tem que seguir a mesma sequencia do que as colunas para preencher a celular correta ?></td>
      <td><?php echo $nivel?></td>
      
      <td><a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_Usuario.php?id=<?php echo $id_usuario?> &nivel=1" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Adiministrador</a>
          <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_Usuario.php?id=<?php echo $id_usuario?> &nivel=2" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Funcionário</a>
          <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_Usuario.php?id=<?php echo $id_usuario?> &nivel=3" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Conferente</a> 
          <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>
    </tr>

    <?php }//o laço de repetição while é fechado aqui para que ele preencha cada <td> ?>

   
    
    </table>


    </div>


  <script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>