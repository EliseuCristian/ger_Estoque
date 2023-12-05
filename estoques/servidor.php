<?php
$ip = "127.0.0.1";
$login = "root";
$senha = "123456";
$banco = "estoquef";
$conn = mysqli_connect($ip, $login, $senha, $banco);
if ($conn) {
}else{
 echo "Erro de conexão";
}

?>