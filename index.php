<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Tela de Login</title>
    <!-- rddr link rel abaico é o boostrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <!-- meta tag para deixar responsivo-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable-no"/> 

    <style type="text/css">
        #tamanho{
            width:350px;
            -webkit-box-shadow: 10px 10px 20px -4px rgba(168,168,168,1);
            -moz-box-shadow: 10px 10px 20px -4px rgba(168,168,168,1);
            box-shadow: 10px 10px 20px -4px rgba(168,168,168,1); 
        }
    </style>
   </head>

  <body>

  <div class="container" id="tamanho" style="margin-top:100px; border-radius:15px; border:2px solid #f3f3f3">
  <div style="padding:10px">
  <center>
  <img src="img/cadeado.jpg" width="125px" heigth="125px">      
  </center>
    <form action="index1.php" method="post">
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>


        <div style="text-align:right;">
            <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
     </form>
     
  </div>
  </div>

        <div style="margin-top:15px">
    <center>
      <p> Você não possui cadastro? clique <a href="cadastro_usuario_externo.php">aqui!</a></p>
    </center>
        </div>
    <script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>