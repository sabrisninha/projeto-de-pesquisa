<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email_pessoal']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email_pessoal = $_POST['email_pessoal'];
    $senha = $_POST['senha'];
    // print_r('Email_pessoal: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuarios WHERE email_pessoal = '$email_pessoal' and senha = '$senha'";

    $result = $conexao->query($sql);

    // print_r($sql);
    // print_r($result);
    header("Location: dashboard.php");

    if(mysqli_num_rows($result) < 1) 
    {
        unset($_SESSION['email_pessoal']);
        unset($_SESSION['senha']);
        header('Location: entrar.php'); 
    }
    else
    {
        $_SESSION['email_pesssoal'] = $email_pessoal;
        $_SESSION['senha'] = $senha;
    
        header('Location: dashboard.php'); 


} 



    
    
 
// 
}else
{
    // Não acessa
    // $_SESSION['msg'] = "<p style='color:red;'>Não foi possivel acessar, email ou senha não encontrados!</p>";
    header('Location: entrar.php');

//     $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado, senha ou email incorretos!</p>";
//     // header("Location: entrar.php");
// 
}
// if(mysqli_num_rows($result)){
// 	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso! </p>";
// 	header("Location: dashboard.php");
	
// }else{
// 	$_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado!</p>";
// 	header("Location: entrar.php");
// }
if(mysqli_num_rows($result) < 1) {
	$_SESSION['msg'] = "<p style='color:red;'>Não foin possivel encontrar ususario, email ou senha incorretos!</p>";
	header("Location: entrar.php");
	
}else{
	$_SESSION['msg'] = "<p style='color:green;'>Usuário encontrado!</p>";
	header("Location: dashboard.php");}
?>