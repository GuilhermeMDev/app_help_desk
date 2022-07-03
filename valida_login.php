<?php

session_start(); //OBS: Sempre inserir o session antes de qlq elemento de impressão exemplo: ECHO, boa pratica manter no começo como aqui..

$usuario_autenticado = false;

$usuarios_app = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
];

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
//    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');

} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
