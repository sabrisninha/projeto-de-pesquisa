<?php


session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email_pessoal = filter_input(INPUT_POST, 'email_pessoal', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', );
$senha = filter_input(INPUT_POST, 'senha', );
$telefone = filter_input(INPUT_POST, 'telefone', );
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', );
$sexo_usuario = filter_input(INPUT_POST, 'sexo_usuario', );
$grupo_usuario  = filter_input(INPUT_POST, 'grupo_usuario', );




echo "Nome: $nome <br>";
echo "Nome: $email_pessoal <br>";
echo "Nome: $cpf <br>";
echo "Nome: $senha <br>";
echo "Nome: $telefone <br>";
echo "Nome: $data_nascimento <br>";
echo "Nome: $sexo_usuario <br>";
echo "Nome: $grupo_usuario <br>";




$result_usuario = "INSERT INTO usuarios (nome, cpf, senha, telefone, email_pessoal, data_nascimento, sexo_usuario, grupo_usuario) 
VALUES ('$nome', '$cpf', '$senha', '$telefone', '$email_pessoal', '$data_nascimento', '$sexo_usuario', '2' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso! </p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado!</p>";
	header("Location: index.php");
}

?>