<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_jogo.php");
                
		exit;
		}else{
		
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contato</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../view/img/controle.png" rel="controle icon">
  <link href="../view/img/controle.png" rel="controle icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../view/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../view/vendor/aos/aos.css" rel="stylesheet">
  <link href="../view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../view/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../view/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../view/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../view/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../view/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Games Shop</a></h1>
		
		<nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
		  <li><a class="active" href="controller_consultar_usu.php">Usuario cadastrados</a></li>
		  <li><a class="active" href="controller_consultar.php">Consultar jogos</a></li>
		  <li><a class="active" href="../view/frm_alterar.php">Alterar jogo</a></li>
      <li><a class="active" href="../view/frm_exluir_jogo.php">Excluir jogo</a></li>
		  <li><a class="active" href="../view/frm_jogo.php">registrar jogo</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a><form action="../View/sair.php">
	     <input type="submit" class="get-started-btn" value="Deslogar" name="deslogar">
		 </form></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

	<!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo "<span>"; echo "Seja bem vindo, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?></h1>
      <h2>Site feito pelo aluno, Lucas Bassora da Silva</h2>
	  <br>
	  <br>
	  <br>
    </div>
  </section>
  <!-- End Hero -->
  
   <!-- inico da tabela 1 -->
  <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 100px;"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          

          </div>

          <table>
      <tr> 
        <th width="1000">Numero de usuarios cadastrados</th>
      </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

     $conectados = "SELECT COUNT(email) AS email FROM usuario";
    
	$resultado_jogos = mysqli_query($conn, $conectados);
        
	while($row_jogos = mysqli_fetch_assoc($resultado_jogos)){ 
	
 ?>

  <tr >
	<td><?php echo $row_jogos['email'];?></td>
  </tr>
  <?php }?>

</table>
    <!-- ======= fim da tabela 1 ======= -->
    <!-- ======= inicio da tabela 2  ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 100px;"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          

          </div>

          <table>
      <tr 
>
   <th width="150">Nome do usuario</th>
    <th width="125">email</th>		
		<th width="125">telefone</th>	
    <th width="125">endereço</th>	
      </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $game = "SELECT * FROM usuario ORDER BY email";
    
	$resultado_game = mysqli_query($conn, $game);
        
	while($row_game = mysqli_fetch_assoc($resultado_game)){ 
	
 ?>
  <tr>
  <td><?php echo $row_game['nome'];?></td>
	<td><?php echo $row_game['email'];?></td>
	<td><?php echo $row_game['telefone'];?></td>
	<td><?php echo $row_game['endereco'];?></td>
  </tr>
  <?php }?>

</table>
<!-- ======= fim da tabela 2 ======= -->
<!-- ======= inicio da tabela 3 ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 100px;"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          

          </div>

          <table>
      <tr 
>
        <th width="1000">Usuarios listados de A a Z </th>

      </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $conectados = "SELECT * FROM usuario GROUP BY nome";
    
	$resultado_game = mysqli_query($conn, $conectados);
        
	while($row_game = mysqli_fetch_assoc($resultado_game)){ 
	
 ?>
  <tr >
	<td><?php echo $row_game['nome'];?></td>
  </tr>
  <?php }?>

</table>

 <!-- ======= fim da tabela 3 ======= -->
 <!-- ======= inicio da tabela 4 ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 100px;"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          

          </div>

          <table>
      <tr 
>
        <th width="300">Usuarios separados por nome </th>

      </tr>  
  
    <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $game = "SELECT * FROM usuario Group BY nome";
    
	$resultado_game = mysqli_query($conn, $game);
        
	while($row_game = mysqli_fetch_assoc($resultado_game)){ 
	
 ?>
  <tr>
  <td><?php echo $row_game['nome'];?></td>
  <td><?php echo $row_game['email'];?></td>
	<td><?php echo $row_game['telefone'];?></td>
	<td><?php echo $row_game['endereco'];?></td>
	
  </tr>
  <?php }?>

</table>

 <!-- ======= fim da tabela 4 ======= -->

<br>
<br>
<br>
<br>
<div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-book"></i>
                <h4>Professora:</h4>
                <p>Simone dos Santos Meideiros de Lacerda</p>
              </div>

              <div class="email">
                <i class="bi bi-person"></i>
                <h4>Criador:</h4>
                <p>Lucas Bassora da Silva</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone:</h4>
                <p>19 98983-5005</p>
              </div>

            </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lucas Bassora da Silva</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../view/vendor/purecounter/purecounter.js"></script>
  <script src="../view/vendor/aos/aos.js"></script>
  <script src="../view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../view/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../view/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../view/js/main.js"></script>

</body>

</html>
 <?php }?>
    
    
    
    

