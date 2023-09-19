<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<div class="container">
			<div class="create-user">
			<div class="message"><h3>Insira os campos a baixo </h3>
      <i class='bx bx-error-circle' style='color:#a637f3'  ></i>
    </div>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			
			

			<div class="input"><input type="text" name="nome" placeholder="Nome completo"></div>
			
	
			<div class="input"> <input type="email" name="email_pessoal" placeholder="E-mail"></div>

		
			<div class="input"><input type="text" name="cpf" placeholder="CPF"></div>
			<div class="input"> <input type="password" name="senha" placeholder="Senha"></div>
			<div class="input"><input type="date" name="data_nascimento" placeholder="Data de nascimento"></div>
			<div class="input"><input type="text" name="telefone" placeholder="Telefone"></div>
			<select name="sexo_usuario" id="sexo_usuario"   >
              <option  selected="selected"  value="genero">Gênero</option>
              <option value="2" id="2">Feminino</option >
              <option value="1" id="1">Masculino</option>
              <option value="3" id="3">Outro</option>
            </select>
			

		<input class="button" type="submit" name="submit" value="Cadastrar">
		
			
		</form>
		</div>
		</div>
	</body>
</html>