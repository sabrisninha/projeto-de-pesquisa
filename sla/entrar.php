<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    
    
        <div class="container">

        

          <div class="create">
            <div class="message"><h3>Insira os campos a baixo  </h3>
              <i class='bx bx-error-circle' style='color:#a637f3'  ></i>
            </div>
            <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
     <form action="testLogin.php" method="POST">

        <div class="input"><input type="email" name="email_pessoal"  placeholder="E-mail" id="email"></div>
        <div class="input"><input type="password"  name="senha"  placeholder="Senha" id="senha"></div>
       
      
        
        
        <input class="button" type="submit" name="submit" value="Enviar">
      </form>
        
        </div>
        </div>
        
        
        
</body>
</html>