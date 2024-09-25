<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">
                <?php
                    //PASSO 1: INCLUIR AS DEFINIÇÕESCDE ACESSO A DADOS
                    include "conexao_bd.php";
                    //PASSO 2: CAPTURAR OS VALORES DIGITADOS 
                    $descricao = $_POST["txtDescricao"];
                    $preco = $_POST["txtPreco"];
                    //PASSO 3: MONTAR UM COMANDO SQL PARA INSERIR O SERVICO
                    $sql = "INSERT INTO servico(descricao,preco) VALUES('$descricao','$preco')";
                    if (executarComando($sql))
                    {
                        echo "<h1>Serviço adicionado com Sucesso!</h1>";
                    }
                    else
                    {
                        echo "<h4>Não foi possivel cadastrar.</h4>";
                    }
                ?>

                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
