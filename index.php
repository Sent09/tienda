<?php 
    include './require/comun.php';
    $bd = new BaseDatos();
    $modelo = new ModeloProducto($bd);
    $lista = $modelo->getList();
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
				<li class="active"><a href="#">Home</a></li> |
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
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>welcome to aditii</h2>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="images/slider1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="images/slider2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="images/slider3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="images/slider4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>featured products</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		
                    
                    <?php 
                    $i = 0;
                    foreach ($lista as $value) {
                        if($i==0){
                           echo "<div class='grids_of_3'>"; 
                        }
                        
                    ?>
                    
                        <div class="grid1_of_3">
                            <a href="phpcartadd.php?id=<?php echo $value->getId(); ?>">
                                <img src="images/<?php echo $value->getFoto(); ?>" alt=""/>
                                <h3><?php echo $value->getNombre(); ?></h3>
                                <div class="price">
                                    <h4><?php echo $value->getPrecio(); ?> €<span>Añadir al carro</span></h4>
                                </div>
                                <span class="b_btm"></span>
                            </a>
			</div>
                    <?php
                        if($i==2){
                           echo "</div>"; 
                           echo "<div class='clear'></div>";
                        }
                        if($i == 2){
                            $i = 0;
                        }else{
                          $i++;  
                        }                        
                    }
                    ?>
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
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
