<?php
/**
 * Created by Palloma Gualter
 * */
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

if(($idade >= 6) && ($idade <= 12)){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo 'O nadador(a) '. $nome. ' competirá na categoria infantil.';
    }
}else if(($idade >= 13) && ($idade < 18)){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo 'O nadador(a) '. $nome. ' competirá na categoria adolescente.';
    }
}else {
    echo 'O nadador(a) '. $nome. ' competirá na categoria adulto.';
}
