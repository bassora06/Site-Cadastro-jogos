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
  <link href="img/controle.png" rel="controle icon">
  <link href="img/controle.png" rel="controle icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

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
      <li><a class="active" href="../controller/controller_consultar_usu.php">Usuario cadastrados</a></li>
		  <li><a class="active" href="../controller/controller_consultar.php">Consultar jogos</a></li>
		  <li><a class="active" href="frm_alterar.php">Alterar jogo</a></li>
      <li><a class="active" href="frm_exluir_jogo.php">Excluir jogo</a></li>
		  <li><a class="active" href="frm_jogo.php">registrar jogo</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a><form action="sair.php">
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
  
  
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 100px;"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

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

          <div class="col-lg-8 mt-5 mt-lg-0">
                 <form action="../Controller/controller_alterar.php" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Registrar jogo</h3>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="id" name="id" required>
                    </div><br>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="nome do jogo" name="nome" required>
                    </div><br>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="gênero" name="genero" required>
                    </div><br>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="preço" name="preco" required>
                    </div><br>
                    <div class="form-group">
                      <center><input type="submit" class="get-started-btn" value="alterar jogo" name="botao"></center>				
					</form>					
						</div>
					</form>		
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
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
 <?php }?>