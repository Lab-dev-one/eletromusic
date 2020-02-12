<?php

session_start();

if (isset($_POST["cadastro"])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];

    require_once('config/conexao_banco.php');

    $sql = DB::getConn()->prepare("insert into usuario(nome, idade, cidade , estado, cep, endereco, email, senha) values(:nome, :sobrenome, :cidade, :estado, :cep, :endereco, :email, :senha);");
    //echo $sql;
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':sobrenome', $sobrenome);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':estado', $estado);
    $sql->bindValue(':cep', $cep);
    $sql->bindValue(':endereco', $bairro);
    $sql->bindValue(':cep', $email);
    $sql->bindValue(':cep', $senha);

    $sql->execute();
    if ($sql->rowCount() >= 1) {
        //Usuario cadastrado com sucesso	
        header("Location:index.php");
    }
}
