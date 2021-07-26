<!DOCTYPE html>
<html lang="en">
<head>

     <title>Todos los Libros</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/estilos-style.css">
     
     <?php include_once("clases/libro.php");?>
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

     <!-- READ HEADER -->
     <section id="read-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Nuestra colección para vos</h2>
                    </div>     
               </div>
          </div>
     </section>

     <!-- READ DETAIL -->
     <section id="read-detail" data-stellar-background-ratio="0.5">
        <div class="container">
             <div class="row">
                  <div class="col-md-offset-1 col-md-10 col-sm-12">
                       <!-- READ THUMB -->
                       <div class="read-detail-thumb">
                      
                            <h2>Buscar Libros</h2>
                            <p>Escribe en el buscador lo que necesites encontrar</p>  
                            <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
                            <br>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>ISBN</th>
                                 <th>Titulo</th>
                                <th>Precio Venta</th>
                                <th>Precio Lista</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Stock Mínimo</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php 
                              $libro = new Libro();
                              $libros =  $libro->mostrarLibros();
                              
                              $cant = count($libros);
                              foreach($libros as $unlibro) { ?>
                              <tr>
                                   <td> <?php echo $unlibro["isbn"] ?></td>
                                   <td> <?php echo $unlibro["titulo"] ?></td>
                                   <td> <?php echo $unlibro["preciov"] ?></td>
                                   <td> <?php echo $unlibro["preciol"] ?></td>
                                   <td> <?php echo $unlibro["genero"] ?></td>
                                   <td> <?php echo $unlibro["stock"] ?></td>
                                   <td> <?php echo $unlibro["stockmin"] ?></td>
                              </tr>
                              <?php }?>                             
                          </tbody>
                            </table>
                      
                      
                      <script>
                      $(document).ready(function(){
                        $("#myInput").on("keyup", function() {
                          var value = $(this).val().toLowerCase();
                          $("#myTable tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                          });
                        });
                      });
                      </script>
                      </div>
                </div> 
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