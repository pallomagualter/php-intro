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
}

if (strlen($nome) < 3) {
    $_SESSION['mensagemDeErro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php')
}

if (strlen($nome) > 40) {
    $_SESSION['mensagemDeErro'] = 'O nome é muito extenso.';
    return;
}

if (!is_numeric($idade)) {
    $_SESSION['mensagemDeErro'] = 'Informe um número para idade.';
    return;
}

if (($idade >= 6) && ($idade <= 12)) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo 'O nadador(a) ' . $nome . ' competirá na categoria infantil.';
    }
} else if (($idade >= 13) && ($idade < 18)) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente')
            echo 'O nadador(a) ' . $nome . ' competirá na categoria adolescente.';
    }
} else {
    echo 'O nadador(a) ' . $nome . ' competirá na categoria adulto.';
}
