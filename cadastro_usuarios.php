

<?php

$conexao = mysqli_connect('localhost', 'root', '', 'usuarios');

$email = 'diego@yahoo.com.br';
$senha = '12345'

$sql = "INSERT INTO usuario ( email, senha ) values ( '$email', $senha )";

$retorno = mysqli_query($conexao, $sql);

if($retorno){
    echo "Dados cadastrados com sucesso ! ";
}
mysqli_close($conexao);

?>