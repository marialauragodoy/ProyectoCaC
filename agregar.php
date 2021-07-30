<!DOCTYPE html>
<html lang="en">
<head>

     <title>Agregar Libros</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/estilos-style.css">
     
</head>
<body>

<!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
  
                    <!-- logo -->
                    <a href="../ProyectoGodoyM/" class="navbar-brand"><font size="6"><font color="#1c73c5"><b>#</b></font> CaC</font></a>
               </div>
  
               <!-- menu links -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="../ProyectoGodoyM/" class="smoothScroll">Inicio</a></li>
                         <li><a href="create.php" class="smoothScroll">Agregar</a></li>
                         <li><a href="modif.php" class="smoothScroll">Modificar</a></li>
                         <li><a href="delete.php" class="smoothScroll">Quitar</a></li>
                         <li><a href="read.php" class="smoothScroll">Ver Todos</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       
                    </ul>
               </div>

          </div>
     </section>

     <!-- CREATE HEADER -->
     <section id="create-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Agregá más libros a nuestra colección</h2>
                    </div>
                    
               </div>
          </div>
     </section>
     
     <section id="create-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
               <?php 
               include_once("clases/libro.php");
                $libro = new Libro(); 
                $visbn = $_POST["isbn"];
                $vtitulo = $_POST['titulo']; 
                $vpreciov = $_POST['pv'];
                $vpreciol = $_POST['pl'];
                $vgenero = $_POST['idgenero'];
                $vstock = $_POST['stock'];
                $vstockmin = $_POST['stockm'];    
                $libro = new Libro();   
                    
                $result = $libro->agregarLibro($visbn, $vtitulo, $vpreciov, $vpreciol, $vgenero, $vstock, $vstockmin);
               if ($result){ ?>
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <!-- CREATE THUMB -->
                         <div class="create-detail-thumb">
                            <h2>¡Libro Agregado!</h2>
                            <br>
                            <a href="create.php" class="section-btn">Volver</a>
                         </div>
                    </div>
               <?php } else { ?>
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <!-- CREATE THUMB -->
                         <div class="create-detail-thumb">
                            <h2>¡Algo salió mal! Intente nuevamente.</h2>
                            <br>
                            <a href="create.php" class="section-btn">Volver</a>
                         </div>
                    </div> 
               <?php } ?>
               </div>
          </div>
     </section>
        
  
     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
  
                    <div class="col-md-12 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>#CaC</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                         </div>
                    </div>
  
                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; 2021 CaC</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p>Llamanos <span>(+549) 11 1020-0340</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>
     

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>