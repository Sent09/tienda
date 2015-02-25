<?php 
    include './require/comun.php';
    
    function recuperar_productos(){
        $contador = 0;
        $productos = Cesta::getProductos("no");
        foreach($productos as $value){ 
                $contador++;
        ?>
                <input name="item_number_<?php echo $contador; ?>" type="hidden" value="<?php echo $_SESSION["__idventa"]."_".$value->getProducto()->getId(); ?>">
                <input name="item_name_<?php echo $contador; ?>" type="hidden" value="<?php echo $value->getProducto()->getNombre(); ?>"> 
                <input name="amount_<?php echo $contador; ?>" type="hidden" value="<?php echo $value->getProducto()->getPrecio(); ?>"> 
                <input name="quantity_<?php echo $contador; ?>" type="hidden" value="<?php echo $value->getCantidad(); ?>"> 
        <?php
        }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Aditii</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start slider -->		
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
                        <!-- CANTIDAD DE PRODUCTOS -->  
                        <li><a class="active-icon c1" href="carro"><i><?php echo Cesta::getCantidadObjetos(); ?></i></a>
			</li>
		</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="index.php">Home</a></li> |
				<li><a href="#">sale</a></li> |
				<li><a href="#">handbags</a></li> |
				<li><a href="#">accessories</a></li> |
				<li><a href="#">wallets</a></li> |
				<li><a href="#l">sale</a></li> |
				<li><a href="#">mens store</a></li> |
				<li><a href="#">shoes</a></li> |
				<li><a href="#">vintage</a></li> |
				<li><a href="#">services</a></li> |
				<li><a href="#">Contact us</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start slider -->
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
    <div class="main1">
        <h2>Cesta</h2>
    </div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">	
        <div class="main">
            <div class="service">
		<div class="ser-main">
			<h4>Pagar con paypal</h4>
			<p class="para">Paypal es una forma rápida y segura de efectuar tus pagos. Para efectuar el pago, pulsa en el botón que verás a continuación y sigue los sencillos pasos. El envio del producto se efectuará a las 24 horas de que el pago haya sido confirmado.</p>	
                </div>
                
                <div class="clear"></div>
            </div>
            <form name='formTpv' method='post' action='https://www.sandbox.paypal.com/cgi-bin/webscr'>
                <input name="cmd" type="hidden" value="_cart"> 
                <input name="upload" type="hidden" value="1">
                <input name="business" type="hidden" value="andresfuentesfernandez-facilitator@gmail.com">
                <input name="shopping_url" type="hidden" value="http://andresdaweb.esy.es/tiendadeportes/carro">
                <input name="currency_code" type="hidden" value="EUR">
                <input name="return" type="hidden" value="http://andresdaweb.esy.es/tiendadeportes/index.php">
                <input type='hidden' name='cancel_return' value='http://andresdaweb.esy.es/tiendadeportes/index.php'>
                <input name="notify_url" type="hidden" value="http://andresdaweb.esy.es/tiendadeportes/notificar.php">
                <input name="rm" type="hidden" value="2">
                <input type="image" border="0" name="submit" src="https://www.paypal.com/es_ES/i/btn/btn_buynow_LG.gif" >

                <?php
                    recuperar_productos();
                ?>
            </form>
            <div class="clear"></div>


        </div>	
    <!-- end grids_of_3 -->
    </div>
</div>
	
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>featured sale</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>mens store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>women store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  All rights reserved </p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
<?php 
    session_destroy();
?>