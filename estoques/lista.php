<?php
require_once("servidor.php");

$comando = "SELECT * FROM produtos ORDER BY nome DESC";
$enviar = mysqli_query($conn, $comando);

if (!$enviar) {
    die("Erro na consulta: " . mysqli_error($conn));
}

$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>

<link rel="stylesheet" href="style_lista.css">

<div class="Banner">Itens no Estoque</div>
<table>
    <tr>
        <th>Nome</th>
        <th>Preco</th>
        <th>Quantidade</th>
        <th>Ação</th>
    </tr>

    <?php
    foreach ($resultado as $linha) {
        echo "<tr>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['preco'] . "</td>";
        echo "<td>" . $linha['quantidade'] . "</td>";

        echo "<td><form method='post' action='excluir.php'>";
        echo "<input type='hidden' name='nome' value='" . $linha['nome'] . "'>";
        echo "<input type='submit' value='Excluir'>";
        echo "</form></td>";
        echo "</tr>";

        
    }
    ?>
</table>


<a href="index.php" button class="btn btn-voltar">Voltar para o início</button>