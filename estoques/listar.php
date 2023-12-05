<?php
session_start();
require_once("servidor.php");

if (isset($_GET['enviar'])) {
    if (!empty($_GET['nome']) && !empty($_GET['preco']) && !empty($_GET['quantidade'])) {
        $nome = $_GET['nome'];
        $preco = $_GET['preco'];
        $quantidade = $_GET['quantidade'];

        $comando = "INSERT INTO produtos(nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
        $enviar = mysqli_query($conn, $comando);

        if ($enviar) {
            $_SESSION['mensagem'] = "Produto cadastrado!";
            header("location: index.php");
            exit;
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar produto!";
            header("location: index.php");
            exit;
        }
    }
}
?>
