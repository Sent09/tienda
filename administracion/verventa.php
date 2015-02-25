<?php
    require '../require/comun2.php';
    $sesion->administrador("index.html");
    $id = Leer::get("id");
    $bd = new BaseDatos();
    $modeloVenta = new ModeloVenta($bd);
    $venta = $modeloVenta->get($id);
    $modeloDetalle = new ModeloDetalleVenta($bd);
    $detalle = $modeloDetalle->getList($id);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Administracion</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Panel de administracion</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="phpcerrarsesion.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <h5 class="centered">Menu</h5>
              	  
                  <li class="sub-menu">
                      <a class="active" href="admin.php" >
                          <i class="fa fa-th"></i>
                          <span>Ventas</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Ventas</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Detalle de la venta</h4>
                          <hr>
                          <p>
                              <b>ID: </b><?php echo $venta->getId(); ?> |
                              <b>Nombre: </b><?php echo $venta->getNombre(); ?> |
                              <b>Dirección: </b><?php echo $venta->getDireccion(); ?> |
                              <b>Fecha: </b><?php echo $venta->getFecha(); ?> |
                              <b>Hora: </b><?php echo $venta->getHora(); ?> |
                              <b>Precio: </b><?php echo $venta->getPago(); ?> €<br>
                          </p>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th> ID</th>
                                  <th> Nombre</th>
                                  <th> Cantidad</th>
                                  <th> Precio</th>
                                  <th> IVA</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php 
                                  foreach ($detalle as $value) {
                                      $modeloProducto = new ModeloProducto($bd);
                                      $producto = $modeloProducto->get($value->getIdproducto());
                                  ?>
                              <tr>
                                <td><?php echo $producto->getId(); ?></td>
                                <td><?php echo $producto->getNombre(); ?></td>
                                <td><?php echo $value->getCantidad(); ?></td>
                                <td><?php echo $value->getPrecio(); ?> €</td>     
                                <td><?php echo $value->getIva(); ?> </td>                                
                              </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center"><br>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
