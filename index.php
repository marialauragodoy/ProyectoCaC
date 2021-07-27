

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="description" content="Agencia de Marketing y posicionamiento FullStack">
    <meta name="keywords" content="Marketing Posicionamiento, Codo a Codo">   
    <meta name="author" content="Codo a Codo 4.0">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Proyecto CAC</title>

    <!-- Link´s CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">  
    <link rel="stylesheet" href="css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/estilos-style.css">           
</head>
<body>
    <!-- encabezado -->
     <!-- Pre- Loader -->   
       <section class="preloader">
        <div class="spinner">
             <span class="spinner-rotate"></span>
        </div>
     </section>


   <!-- menu -->
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
                       <li><a href="#"><i class="fa fa-facebook-square" style="font-size:30px"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram" style="font-size:30px"></i></a></li>
                       <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form-ingresar">Ingresar</a></li>
                  </ul>
             </div>

        </div>
   </section>
    <!-- Home -->
   <section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="home-info">
                    <h1>Encontrá todos los libros que buscas, aquí</h1>
                    <a class="btn section-btn smoothScroll" data-toggle="modal" data-target="#modal-form-registrar">¿Quieres unirte?</a>
                        <span>Registrate para saber más</span>
                </div>
            </div>
        </div>
    </div>

   </section>

   

    <!-- pie de página -->        
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

   <section class="modal fade" id="modal-form-ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
         <div class="modal-content modal-popup">

              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
              </div>

              <div class="modal-body">
                   <div class="container-fluid">
                        <div class="row">

                             <div class="col-md-12 col-sm-12">
                                  <div class="modal-title">
                                       <h2>#CaC</h2>
                                  </div>

                                  <!-- NAV TABS -->
                                  <ul class="nav nav-tabs" role="tablist">
                                       <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                  </ul>

                                  <!-- TAB PANES -->
                                  <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane fade in active" id="sign_in">
                                            <form action="#" method="post">
                                                 <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                 <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                 <input type="submit" class="form-control" name="submit" value="Ingresar">
                                                 
                                            </form>
                                       </div>
                                  </div>
                             </div>

                        </div>
                   </div>
              </div>

         </div>
    </div>
</section>

<section class="modal fade" id="modal-form-registrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
         <div class="modal-content modal-popup">

              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
              </div>

              <div class="modal-body">
                   <div class="container-fluid">
                        <div class="row">

                             <div class="col-md-12 col-sm-12">
                                  <div class="modal-title">
                                       <h2>#CaC</h2>
                                  </div>

                                  
                                  <ul class="nav nav-tabs" role="tablist">
                                       <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Registrate</a></li>
                                  </ul>

                                  
                                  <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                            <form action="#" method="post">
                                                 <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                 <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                 <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                 <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                 <input type="submit" class="form-control" name="submit" value="Registrarte">
                                            </form>
                                       </div>
                                  </div>
                             </div>

                        </div>
                   </div>
              </div>

         </div>
    </div>
</section>

    <!-- Scripts JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

