<?php //FORMAS DE LOGOFF QUE O PROF MOSTROU NO PROJETO
//Remover indices do array de sessão (superglobais)
//unset() - remover indices do array
    //aqui no unset ele tem a inteligencia de náo erro, quando náo existe o indice na superglobal.

//Destruir a variável de sessão
//session_destroy() - remove todos os indices contidos dentro da SuperGlobal session ($_SESSION)
    //aqui tivemos que forçar o redirecionamento para index.php
session_start();

session_destroy();

header('location: index.php');