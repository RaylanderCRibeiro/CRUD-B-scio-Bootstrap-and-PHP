<?php

include  'conexao.php'; 

    $id = $_POST['id'];
    //o numero do produto não será alterado // $nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
   

    $sql = "UPDATE `estoque` 
    SET `nomeproduto`= '$nomeproduto' WHERE id_estoque = $id";

     $atualizar = mysqli_query($conexao,$sql);




?>


<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:400px">

    <center>
        <h3>Atualizado com Sucesso!</h3>
            <div style="margin-top:10px">
        <A href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
            </div>
    </center>

</div>