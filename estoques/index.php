<?php
session_start();
    require_once("servidor.php");
    if (!empty($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>

<link rel="stylesheet" href="styles.css">
<div class="banner">
<h1>Gerência de estoques</h1>
</div>


<form action="listar.php" method="get" accept-charset="UTF-8">
    <div class="form-container">
        <div class="input-group">
            <label for="nome">Nome do produto</label>
            <input type="text" name="nome">
        </div>
        <div class="input-group">
            <label for="preco">Preço do produto</label>
            <input type="text" name="preco">
        </div>
        <div class="input-group">
            <label for="quantidade">Quantidade do produto</label>
            <input type="text" name="quantidade">
        </div>

        <div class="btn-container">
            <input type="submit" name="enviar" value="Cadastrar" class="btn btn-verde">
            <a href="lista.php" class="btn btn-laranja">Ver Estoque</a>
            <input type="reset" value="Limpar" class="btn btn-vermelho">
        </div>
    </div>
</form>


</div>

