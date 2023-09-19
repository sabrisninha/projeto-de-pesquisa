<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email_pessoal']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email_pessoal']);
        unset($_SESSION['senha']);
        header('Location: inicial.html');
    }
    $logado = $_SESSION['email_pessoal'];
    $latitutde;
    $longitude
 ?>


  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header1">
            <h2>OurBag</h2>
            <i class="bx bx-menu"></i>
        </div>

        <!-- HEADER 2 -->
        <div class="header2">
            <div class="box-esq">
                <a href=""><i class="bx bxs-bell"></i></a>
                <a href=""><i class="bx bx-envelope"></i></a>
              <a href=""><i class="bx bxs-cog"></i></a>  
            </div>
            
        </div>

        <div class="menu">
            <ul>
                <li>
                    <a href="#"> <i class="bx bxs-dashboard"></i>Suporte</a>
                </li>

            
                <li>
                    <a href="#"> <i class="bx bxs-group"></i>Usuario</a>
                </li>
                <li>
                    <a href="#"><i class='bx bx-revision'></i>Historico</a>
                </li>
              
            </ul>
        </div>
        <div class="where-car">
            <div class="where">
                <h2>Onde está meu veiculo?</h2>
            </div>
            <?php 
           
           
//  caminho do seu arquivo de conexão ao banco de dados $consulta = "SELECT * FROM usuario"; $con = $mysqli->query($consulta) or die($mysqli->error); 
$sql = "SELECT * FROM localizacoes_gps WHERE latitude and longitude";
?> 
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.7046630721293!2d-51.708383125449565!3d-20.76276126477869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9490986742d159b1%3A0xbcaf71f3adf22558!2sInstituto%20Federal%20de%20Mato%20Grosso%20do%20Sul%20(IFMS)%20-%20Campus%20Tr%C3%AAs%20Lagoas!5e0!3m2!1spt-BR!2sbr!4v1690849168163!5m2!1spt-BR!2sbr" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            
        </div>
     
    </div>

</body>

</html>