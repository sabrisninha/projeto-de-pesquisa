<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
echo '<pre>';
print_r("variaveis:");
print_r($nome);
print_r($email);
print_r($senha);
print_r($cpf);
print_r($data_nasc);
print_r($telefone);
print_r($sexo);
print_r("fim variaveis:");
echo '</pre>';
die;

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Senha: $senha <br>";
echo "CPF: $cpf <br>";
echo "Data Nascimento: $data_nasc <br>";
echo "Telefone: $telefone <br>";
echo "Sexo: $sexo <br>";

$result_usuario = "INSERT INTO usuario (nome, email, senha, cpf, data_nasc, telefone, sexo) VALUES ('$nome', '$email','$senha', '$cpf', '$data_nasc', '$telefone', '$sexo' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso.</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>ERRO ao cadastrar usuário.</p>";
	header("Location: index.php");
}

?>