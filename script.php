<?php

/**
 * Created by Palloma Gualter
 * */

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagemDeErro'] = 'O nome não pode ser vazio.';
    header('location: index.php');
    return;
}

if (strlen($nome) < 3) {
    $_SESSION['mensagemDeErro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
    return;
}

if (strlen($nome) > 40) {
    $_SESSION['mensagemDeErro'] = 'O nome é muito extenso.';
    header('location: index.php');
    return;
}

if (!is_numeric($idade)) {
    $_SESSION['mensagemDeErro'] = 'Informe um número para idade.';
    header('location: index.php');
    return;
}

if (($idade >= 6) && ($idade <= 12)) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagemDeSucesso'] = 'O nadador(a) ' . $nome . ' competirá na categoria infantil.';
            header('location: index.php');
            return;
        }
    }
} else if (($idade >= 13) && ($idade < 18)) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagemDeSucesso'] = 'O nadador(a) ' . $nome . ' competirá na categoria adolescente.';
            header('location: index.php');
            return;
        }
    }
} else {

    $_SESSION['mensagemDeSucesso'] = 'O nadador(a) ' . $nome . ' competirá na categoria adulto.';
    header('location: index.php');
    return;
}
