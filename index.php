<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 10;
//var_dump($nome);
//var_dump($idade);

if(($idade >= 6) && ($idade <= 12)){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo 'O nadador '. $nome. ' competirá na categoria infantil.';
    }
}else if(($idade >= 13) && ($idade < 18)){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo 'O nadador '. $nome. ' competirá na categoria adolescente.';
    }
}else {
        echo 'O nadador '. $nome. ' competirá na categoria adulto.';
}