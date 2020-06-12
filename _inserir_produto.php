<?php

include 'conexao.php';//incluindo todas as variaveis do conexao.php 

$nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];//recebe o valor do atributo
$categoria = $_POST['categoria'];//recebe o valor do atributo
$quantidade = $_POST['quantidade'];//recebe o valor do atributo
$fornecedor = $_POST['fornecedor'];//recebe o valor do atributo


        //esse é o sql de inserção
    $sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`)
 VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);//ele pega a variavel $conexao conecta no banco de dados e depois ele da o comando sql(comando de inserção) 

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px;margin-top: 20px">
    <center>
    <h4>Produto adicionado com sucesso!</h4>
        </center>
    <div style="padding-top: 20px">
        <center>
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
        </center>
    </div>
</div>