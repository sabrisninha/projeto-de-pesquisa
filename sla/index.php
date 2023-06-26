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
			
	
			<div class="input"> <input type="email" name="email" placeholder="E-mail"></div>

		
			<div class="input"><input type="text" name="cpf" placeholder="CPF"></div>
			
			<div class="input"><input type="date" name="data_nasc" placeholder="Data de nascimento"></div>
			<div class="input"><input type="text" name="telefone" placeholder="Telefone"></div>
			<select name="genero" id="genero"   >
              <option  selected="selected"  value="genero">Gênero</option>
              <option value="Feminino">Feminino</option>
              <option value="Masculino">Masculino</option>
              <option value="Outro">Outro</option>
            </select>
	
			<input type="submit" value="Cadastrar">
			
		</form>
		</div>
		</div>
	</body>
</html>