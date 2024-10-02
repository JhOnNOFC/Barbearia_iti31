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
                    //1: PASSO INCLUIR AS CONFIGURAÇÕES DE ACESSO DE DADOS
                    include "conexao_bd.php";
                    //2: PASSO CAPTURAR OS DADOS  DIGITADOS
                    $nome = $_POST["txtNome"];
                    $id_servico = $_POST["selectServico"];
                    $data_agendamento = $_POST["txtData"];
                    $horario_agendamento = $_POST["selectHorario"];
                    //3: PASSO MONTAR UM COMANDO SQL PARA INSERIR
                    $sql = "INSERT INTO agendamento(nome,id_servico,data_agendamento,horario_agendamento) ";
                    $sql .= " VALUES('$nome','$id_servico','$data_agendamento','$horario_agendamento')";
                    //4: PASSO EXECUTAR NO BDA O COMANDO
                    if (executarComando($sql))
                    {
                        echo "<h2>Serviço agendado!</h2>";
                    }
                    else
                    {
                        echo "<h2>Não foi possível agendar!</h2>";
                    }
                
                ?>
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
