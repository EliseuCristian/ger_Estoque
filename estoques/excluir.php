<?php
require_once("servidor.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['nome'])) {
        $nomeProduto = $_POST['nome'];

        
        $nomeProduto = mysqli_real_escape_string($conn, $nomeProduto);

        
        $consultaExcluir = "DELETE FROM produtos WHERE nome = '$nomeProduto'";

        
        $resultadoExcluir = mysqli_query($conn, $consultaExcluir);

        if ($resultadoExcluir) {
            echo "Produto excluído com sucesso!";
        } else {
            echo "Erro ao excluir produto: " . mysqli_error($conn);
        }

        
        header("Location: lista.php");
        exit;
    } else {
        echo "Nome do produto não fornecido.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>

