<?php


session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', );
$telefone = filter_input(INPUT_POST, 'telefone', );


// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios ( nome, cpf, telefone,  email_pessoal, data_nascimento, grupo_usuario) VALUES ('$nome', '$cpf', '$telefone', '$email_pessoal', '$data_nascimento','$grupo_usuario' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário não cadastrado! </p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário cadastrado com sucesso!</p>";
	header("Location: index.php");
}

?>
