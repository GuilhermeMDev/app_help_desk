<?php

//abrindo um arquivo com qlq extensão
$arquivo = fopen('arquivo.hd', 'a'); //arquivo.hd é uma extensão própria deste projeto neste caso. Siginifica "Help Desk"
/*
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

//Fizemos esse replace de # para -, devido a possibilidade inserir um # no meio dos textos
//enviado no form. Poderia conflitar no manuseio das info.
$texto = $titulo . '#' . $categoria . '#' . $descricao ;
*/

            //--------DESAFIO DA AULA---------
            //substituir a lógica a cima pelo implode.
$texto = implode("#", $_POST);
            //resolvido.


//adicionando o texto no final do arquivo, com base no parametro 'a'
//na linha 7 ao criar o arquivo.
fwrite($arquivo, $texto);

//fechando arquivo, funçao nativa do php
fclose($arquivo);