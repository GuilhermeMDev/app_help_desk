<?php require_once("validador_acesso.php"); ?>

<?php
//chamados
$chamados = [];


$arquivo = fopen('arquivo.hd', 'r');//somente leitura
while (!feof($arquivo)) { //funcao nativa do php, le cada linha do arquivo, retorna true ou false encontrando ou nao o final do arquivo EOL.
    $registro = fgets($arquivo); //funcao nativa do php, recuperando o valor da linha onde esta o cursor do php dentro do arquivo.hd
    $chamados[] = $registro;
}
fclose($arquivo); //fechando o arquivo aberto

?>


<html>
<head>
    <meta charset="utf-8"/>
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
    </a>
</nav>

<div class="container">
    <div class="row">

        <div class="card-consultar-chamado">
            <div class="card">
                <div class="card-header">
                    Consulta de chamado
                </div>

                <div class="card-body">
                    <!--  aqui estamos chamando a lógica para imprimir as chamadas criadas, armazenadas no arquivo.txt-->
                    <?php foreach ($chamados as $chamado) { ?>

                        <?php
                        $chamado_dados = explode('#', $chamado);

                        //tratando os erros ao imprimir o ultimo array vazio, devido a logica de iteracao do php na logica de
                        // quebra de linha do PHP_EOL(END OF LINE)
                        if (count($chamado_dados) < 3) {
                            continue;
                        }
                        ?>

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?= $chamado_dados[0] ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1] ?></h6>
                                <p class="card-text"><?= $chamado_dados[2] ?></p>

                            </div>
                        </div>

                    <?php } ?>
                    <div class="row mt-5">
                        <div class="col-6">
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>