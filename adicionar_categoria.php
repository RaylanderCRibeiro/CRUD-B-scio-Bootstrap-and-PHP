<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Adicionar Categoria</title>
    <!-- esse link rel abaixo é o boostrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
   
        <style type="text/css">

        #botao{
            background-color:#FF1168;
            color:#fff;
            font-weight:bold;
        }

    </style>

  </head>
  <body>

        <div class="container" style="margin-top:40px;width:500px">

        <div style="text-align:right">
          <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Cadastro de Categoria</h4>
            <form action="_inserir_categoria.php" method="post">

            <label>Categoria</label>
                <div class="form-group"´>
                    <input type="text" name="categoria" placeholder="Digite o nome da categoria" class="form-control" autocomplete="off">
                </div>
                    <div style="text-align:right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
                    </div>
            </form>
        </div>


<!--esse script abaixo é o bootstrap-->
<script> type="text/javascript" scr="js/bootstrap.js"</script>
  </body>
</html>