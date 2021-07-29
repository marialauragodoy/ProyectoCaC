<!DOCTYPE html>
<html lang="en">
<head>

     <title>Modificar Libros</title>

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
    
     <!-- MODIF HEADER -->
     <section id="modif-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Modifica libros de nuestra colección</h2>
                    </div>     
               </div>
          </div>
     </section>

    <form>
        <?php $titulo = $_POST["titulo"];  ?>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="titulo" placeholder="Titulo" value="<?php $_POST["titulo"] ;?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="<?php $_POST["isbn"]; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="stock">Stock </label>
                <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" value="<?php $_POST["stock"]; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="stockm">Stock Mínimo</label>
                <input type="text" class="form-control" id="stockm" name="stockm" placeholder="Stock Mínimo" value="<?php $_POST["stockmin"]; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="pv">Precio Venta</label>
                <input type="text" class="form-control" id="pv" name="pv" placeholder="Precio Venta" value="<?php $_POST["pv"]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="pl">Precio Lista</label>
                <input type="text" class="form-control" id="pl" name="pl" placeholder="Precio Lista" value="<?php $_POST["pl"]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Categoria</label>
                <select id="inputState" name="idgenero" class="form-control">
                    <option selected disabled value="">Elige...</option>
                    <option value="1">Terror</option>
                    <option value="2">Romántico</option>
                    <option value="3">Aventura</option>
                    <option value="4">Acción</option>
                    <option value="5">Thiller</option>
                    <option value="6">Fantasía</option>
                </select>
            </div>
        </div>
        <input type="submit" class="form-control" name="submit" value="Agregar">
        <a href="modif.php" class="section-btn">Volver</a>

    </form>
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
