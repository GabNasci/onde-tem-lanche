<?php

if(isset($nome) || isset($telefone) || isset($email) || isset($senha)) {

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['E-mail'];
    $senha = $_POST['senha'];

    echo $nome;

}






?>