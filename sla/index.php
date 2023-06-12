<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
      <div class="input"><input type="email"  placeholder="E-mail" id="email" ><i class='bx bxs-envelope'style='color:#a637f3'></i></div>
      <div class="input"><input type="password"  placeholder="Senha" id="senha"><i class='bx bxs-low-vision'style='color:#a637f3'></i></div>
      <div class="input"><input type="text"  placeholder="Nome" id="nome"><i class='bx bx-user'style='color:#a637f3'></i></div>
      <div class="input"><input type="text"  placeholder="CPF" id="cpf"><i class='bx bx-key'style='color:#a637f3'></i></div>

      <div class="input"><input type="date" placeholder="Data de nascimento"  id="data_nasc"><i class='bx bx-calendar'style='color:#a637f3'></i></div>
      <div class="input"><input type="int"  placeholder=" Numero de telefone"id="telefone"><i class='bx bx-phone'style='color:#a637f3'></i></div>
        
      <div class="dropdown">

        <select name="genero" id="sexo"   >
          <option  selected="selected"  value="genero">Gênero</option>
          <option value="Feminino">Feminino</option>
          <option value="Masculino">Masculino</option>
          <option value="Outro">Outro</option>
        </select>
      </div> 
      <input type="submit" value="Cadastrar">
    </form>
  </div>
</div>

</body>
</html>