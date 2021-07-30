<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eliminar Libros</title>

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

     <!-- DELETE HEADER -->
     <section id="delete-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Elimina libros de nuestra colección</h2>
                    </div>     
               </div>
          </div>
     </section>

    <!-- DELETE DETAIL -->
     <section id="delete-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                 <div class="col-md-offset-1 col-md-10 col-sm-12">
                       <!-- CREATE THUMB -->
                    <div class="delete-detail-thumb">
                        
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
                                <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <tr>
                            <?php
                             include_once("clases/libro.php");
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
                                   <td>
                                      <?php echo "<a href='eliminar.php?isbn=". $unlibro["isbn"] ."'>Eliminar</a>"; ?>
                                  </td>
                              </tr>
                              <?php }?>  
                            </tr>
                          </tbody>
                            </table>
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

     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                             <h2>Eliminar Libro</h2>
                                        </div>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_in">
                                                  <form action="#" method="post">
                                                       <h3 style="color:white;">Desea eliminar este libro?</h3>
                                                       <input type="submit" class="form-control" name="submit" value="Eliminar">
                                                       <input type="submit" class="form-control" name="submit" value="Cancelar">
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

</body>
</html>